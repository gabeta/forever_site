import requests
from bs4 import BeautifulSoup
import json
import re
import os
from urllib.parse import urlparse
from pathlib import Path
import unicodedata

def clean_filename(filename):
    # Normaliser les caractères Unicode (enlever les accents)
    filename = unicodedata.normalize('NFKD', filename).encode('ASCII', 'ignore').decode('ASCII')

    # Remplacer les caractères spéciaux par des tirets
    filename = re.sub(r'[^\w\s-]', '-', filename)

    # Remplacer les espaces multiples par un seul tiret
    filename = re.sub(r'\s+', '-', filename)

    # Supprimer les tirets multiples
    filename = re.sub(r'-+', '-', filename)

    # Supprimer les tirets au début et à la fin
    filename = filename.strip('-')

    return filename.lower()

def clean_price(price_str):
    # Supprimer les caractères non numériques sauf la virgule
    return int(re.sub(r'[^\d,]', '', price_str).replace(',', ''))

def download_image(url, product_name, index):
    try:
        # Créer un nom de fichier sécurisé
        safe_name = clean_filename(product_name)
        parsed_url = urlparse(url)
        file_extension = os.path.splitext(parsed_url.path)[1]
        if not file_extension:
            file_extension = '.jpg'

        # Ajouter un index pour éviter les doublons
        filename = f"{safe_name}-{index}{file_extension}"
        filepath = os.path.join('public/images', filename)

        # Télécharger l'image
        response = requests.get(url, stream=True)
        response.raise_for_status()

        with open(filepath, 'wb') as f:
            for chunk in response.iter_content(chunk_size=8192):
                f.write(chunk)

        return f"images/{filename}"
    except Exception as e:
        print(f"Erreur lors du téléchargement de l'image {url}: {e}")
        return None

def scrape_products():
    base_url = "https://shopping.longrich-ci.com/"
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    }

    all_products = []
    page = 1
    product_index = 1

    try:
        while True:
            # Construire l'URL avec la pagination
            url = f"{base_url}page/{page}/" if page > 1 else base_url
            print(f"Scraping de la page {page}...")

            response = requests.get(url, headers=headers)
            response.raise_for_status()
            soup = BeautifulSoup(response.text, 'html.parser')

            # Vérifier s'il y a des produits sur la page
            product_elements = soup.select('ul.products li.product')
            if not product_elements:
                break

            for product in product_elements:
                # Extraire les informations du produit
                name = product.select_one('.woocommerce-loop-product__title').text.strip()
                category = product.select_one('.ast-woo-product-category').text.strip()

                # Extraire les prix
                price_element = product.select_one('.price')
                original_price = clean_price(price_element.select_one('del .woocommerce-Price-amount').text)
                current_price = clean_price(price_element.select_one('ins .woocommerce-Price-amount').text)

                # Extraire et télécharger l'image
                img_element = product.select_one('img.attachment-woocommerce_thumbnail')
                image_url = img_element['src'] if img_element else ''
                local_image_path = download_image(image_url, name, product_index) if image_url else None

                # Vérifier si le produit est en promo
                is_promo = bool(product.select_one('.onsale'))

                product_data = {
                    'id': product_index,
                    'name': name,
                    'category': category,
                    'originalPrice': original_price,
                    'currentPrice': current_price,
                    'image': local_image_path,
                    'isPromo': is_promo
                }

                all_products.append(product_data)
                product_index += 1

            # Vérifier s'il y a une page suivante
            next_page = soup.select_one('a.next.page-numbers')
            if not next_page:
                break

            page += 1

        # Sauvegarder dans un fichier JSON
        with open('products.json', 'w', encoding='utf-8') as f:
            json.dump(all_products, f, ensure_ascii=False, indent=2)

        print(f"Nombre total de produits extraits : {len(all_products)}")
        return all_products

    except requests.RequestException as e:
        print(f"Erreur lors de la requête : {e}")
        return []
    except Exception as e:
        print(f"Erreur inattendue : {e}")
        return []

if __name__ == "__main__":
    # S'assurer que le dossier images existe
    Path('public/images').mkdir(parents=True, exist_ok=True)
    scrape_products()