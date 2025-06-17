<?php
// Inclure les fonctions utilitaires
require_once __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Longrich Côte d\'Ivoire'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'Obtenez le meilleur des produits cosmétiques, santé et bien-être Longrich à partir d\'une seule unique plateforme.'; ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'longrich-green': '#3db17e',
                        'longrich-green-dark': '#2ea169'
                    }
                }
            }
        }
    </script>
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Mobile menu toggle */
        .mobile-menu {
            display: none;
        }

        .mobile-menu.active {
            display: block;
        }

        /* Cart dropdown */
        .cart-dropdown {
            display: none;
        }

        .cart-dropdown.active {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Skip to content link -->
    <a href="#content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 bg-blue-600 text-white px-4 py-2 rounded z-50">
        Aller au contenu
    </a>

    <!-- Header -->
    <header class="bg-white shadow-sm border-b">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php">
                        <img src="https://ext.same-assets.com/3733162440/2868472229.png" alt="Longrich" class="h-12 w-auto">
                    </a>
                    <div class="ml-3 hidden sm:block">
                        <h1 class="text-lg font-semibold text-gray-800">Santé, Beauté & Bien-Être</h1>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="produits.php" class="text-gray-700 hover:text-longrich-green font-medium">Boutique</a>
                    <a href="comment-ca-marche.php" class="text-gray-700 hover:text-longrich-green font-medium">Comment ça marche</a>
                    <a href="plan-remuneration.php" class="text-gray-700 hover:text-longrich-green font-medium">Plan de rémunération</a>
                </nav>

                <!-- Search and Cart -->
                <div class="flex items-center space-x-4">
                    <button type="button" class="text-gray-700 hover:text-longrich-green">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button type="button" class="md:hidden text-gray-700 hover:text-longrich-green" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="mobile-menu md:hidden border-t bg-white">
                <nav class="py-4 space-y-2">
                    <a href="produits.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Boutique</a>
                    <a href="comment-ça-marche.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Comment ça marche</a>
                    <a href="plan-remuneration.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Plan de rémunération</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Mon Panier</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">Validation de la commande</a>
                    <!-- Mobile search -->
                    <div class="px-4 py-2">
                        <div class="flex items-center bg-gray-100 rounded-md px-3 py-2">
                            <input type="text" placeholder="Rechercher..." class="bg-transparent outline-none text-sm w-full">
                            <svg class="h-4 w-4 text-gray-500 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>