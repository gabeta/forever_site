import requests
from bs4 import BeautifulSoup
import json
import re
import os
from urllib.parse import urlparse
from pathlib import Path

def clean_price(price_str):
    # Supprimer les caractères non numériques sauf la virgule
    return int(re.sub(r'[^\d,]', '', price_str).replace(',', ''))

def download_image(url, product_name):
    try:
        # Créer un nom de fichier sécurisé
        safe_name = re.sub(r'[^\w\s-]', '', product_name).strip().replace(' ', '_')
        parsed_url = urlparse(url)
        file_extension = os.path.splitext(parsed_url.path)[1]
        if not file_extension:
            file_extension = '.jpg'

        filename = f"{safe_name}{file_extension}"
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
                local_image_path = download_image(image_url, name) if image_url else None

                # Vérifier si le produit est en promo
                is_promo = bool(product.select_one('.onsale'))

                product_data = {
                    'name': name,
                    'category': category,
                    'originalPrice': original_price,
                    'currentPrice': current_price,
                    'image': local_image_path,
                    'isPromo': is_promo
                }

                all_products.append(product_data)

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