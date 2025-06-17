<?php
// Inclure les fonctions utilitaires
require_once __DIR__ . '/includes/functions.php';

// Inclure le header
require_once __DIR__ . '/includes/header.php';

// Définir les variables de la page
$pageTitle = 'Produits - Santé, Beauté & Bien-Être';
$pageDescription = 'Découvrez notre sélection de produits de santé, beauté et bien-être Longrich.';

// Charger les produits depuis le fichier JSON
$productsJson = file_get_contents(__DIR__ . '/products.json');
$products = json_decode($productsJson, true);

// Configuration de la pagination
$itemsPerPage = 16;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);

// Validation de la page courante
if ($currentPage < 1) {
    $currentPage = 1;
} elseif ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}

// Calculer les indices de début et de fin
$startIndex = ($currentPage - 1) * $itemsPerPage;
$endIndex = min($startIndex + $itemsPerPage, count($products));

// Extraire les produits pour la page courante
$currentPageProducts = array_slice($products, $startIndex, $itemsPerPage);
?>

<main id="content" class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-longrich-green to-longrich-green-dark text-white rounded-lg p-8 mb-8">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold mb-4">Nos Produits</h2>
            <p class="text-lg mb-6">Découvrez notre sélection de produits de santé, beauté et bien-être de qualité.</p>
        </div>
    </div>

    <!-- Products Grid -->
    <div id="products" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php foreach ($currentPageProducts as $product): ?>
            <div class="bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="relative">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="w-full h-48 object-cover">
                    <?php if (isset($product['isPromo']) && $product['isPromo']): ?>
                        <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded text-sm">
                            Promo
                        </div>
                    <?php endif; ?>
                </div>
                <div class="p-4">
                    <h3 class="font-medium text-gray-800 mb-2 line-clamp-2"><?php echo htmlspecialchars($product['name']); ?></h3>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <p class="text-lg font-bold text-gray-900"><?php echo formatPrice($product['currentPrice']); ?></p>
                            <?php if (isset($product['originalPrice']) && $product['originalPrice'] > $product['currentPrice']): ?>
                                <p class="text-sm text-gray-500 line-through"><?php echo formatPrice($product['originalPrice']); ?></p>
                            <?php endif; ?>
                        </div>
                        <a href="https://wa.me/22578174738?text=Bonjour, je suis intéressé par le produit <?php echo urlencode($product['name']); ?>"
                            target="_blank"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-longrich-green hover:bg-longrich-green-dark">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Contacter
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-8 flex justify-center">
        <nav class="flex items-center space-x-2">
            <?php if ($currentPage > 1): ?>
                <a href="?page=<?php echo $currentPage - 1; ?>" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">
                    Précédent
                </a>
            <?php endif; ?>

            <?php
            $startPage = max(1, $currentPage - 2);
            $endPage = min($totalPages, $currentPage + 2);

            if ($startPage > 1) {
                echo '<a href="?page=1" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">1</a>';
                if ($startPage > 2) {
                    echo '<span class="px-2">...</span>';
                }
            }

            for ($i = $startPage; $i <= $endPage; $i++) {
                $activeClass = $i === $currentPage ? 'bg-longrich-green text-white' : 'bg-white text-gray-700 hover:bg-gray-50';
                echo '<a href="?page=' . $i . '" class="px-3 py-2 rounded-md border ' . $activeClass . '">' . $i . '</a>';
            }

            if ($endPage < $totalPages) {
                if ($endPage < $totalPages - 1) {
                    echo '<span class="px-2">...</span>';
                }
                echo '<a href="?page=' . $totalPages . '" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">' . $totalPages . '</a>';
            }
            ?>

            <?php if ($currentPage < $totalPages): ?>
                <a href="?page=<?php echo $currentPage + 1; ?>" class="px-3 py-2 rounded-md bg-white border text-gray-700 hover:bg-gray-50">
                    Suivant
                </a>
            <?php endif; ?>
        </nav>
    </div>
</main>

<?php
// Inclure le footer
require_once __DIR__ . '/includes/footer.php';
?>