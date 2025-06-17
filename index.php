<?php
// Inclure les fonctions utilitaires
require_once __DIR__ . '/includes/functions.php';

// Inclure le header
require_once __DIR__ . '/includes/header.php';

// Définir les variables de la page
$pageTitle = 'Accueil - Longrich Côte d\'Ivoire';
$pageDescription = 'Bienvenue sur la boutique en ligne de Longrich Côte d\'Ivoire. Découvrez nos produits de santé, beauté et bien-être.';
?>

<main id="content" class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-longrich-green to-longrich-green-dark text-white rounded-lg p-8 mb-8">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold mb-4">Bienvenue sur notre boutique Longrich</h2>
            <p class="text-lg mb-6">Découvrez notre sélection de produits de santé, beauté et bien-être de qualité.</p>
            <a href="produits.php" class="bg-white text-longrich-green px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition-colors">
                Voir les produits
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="text-longrich-green mb-4">
                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Produits de Qualité</h3>
            <p class="text-gray-600">Des produits testés et approuvés par des experts de la santé.</p>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="text-longrich-green mb-4">
                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Livraison Rapide</h3>
            <p class="text-gray-600">Livraison express dans toute la Côte d'Ivoire.</p>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="text-longrich-green mb-4">
                <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Paiement Sécurisé</h3>
            <p class="text-gray-600">Transactions sécurisées et garanties.</p>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Nos Catégories</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="produits.php?category=Hygiène bucco-dentaire" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-medium text-gray-900">Hygiène bucco-dentaire</h3>
            </a>
            <a href="produits.php?category=Hygiène Corporelle" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-medium text-gray-900">Hygiène Corporelle</h3>
            </a>
            <a href="produits.php?category=Fertilité & Virilité" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-medium text-gray-900">Fertilité & Virilité</h3>
            </a>
            <a href="produits.php?category=Boissons énergisantes" class="bg-white rounded-lg shadow-sm p-4 text-center hover:shadow-md transition-shadow">
                <h3 class="font-medium text-gray-900">Boissons énergisantes</h3>
            </a>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-r from-longrich-green to-longrich-green-dark text-white rounded-lg p-8 mb-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Rejoignez l'équipe Longrich</h2>
            <p class="text-lg mb-6">Découvrez une opportunité d'affaires unique et commencez à construire votre avenir dès aujourd'hui.</p>
            <a href="comment-ca-marche.php" class="inline-block bg-white text-longrich-green px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition-colors">
                Découvrir l'opportunité
            </a>
        </div>
    </div>

    <!-- Section Parrainage -->
    <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Code Parrain</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Code de parrainage -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Mon Code Parrain</h3>
                    <p class="text-gray-600 mb-4">Utilisez ce code lors de votre inscription pour bénéficier de tous les avantages du parrainage.</p>
                    <div class="bg-white p-4 rounded-md border-2 border-longrich-green">
                        <p class="text-2xl font-bold text-center text-longrich-green">LONGRICH-CI</p>
                    </div>
                    <div class="mt-4 text-center">
                        <button onclick="copyCode()" class="text-longrich-green hover:text-longrich-green-dark font-medium flex items-center justify-center mx-auto">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                            </svg>
                            Copier le code
                        </button>
                    </div>
                </div>

                <!-- Informations sur le parrainage -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Avantages du Parrainage</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-longrich-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">Bonus de parrainage de 20.000 à 60.000 FCFA</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-longrich-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">Accompagnement personnalisé</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-longrich-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">Formation et conseils</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-longrich-green mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600">Support continu</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <a href="https://wa.me/2250707070707?text=Bonjour, je souhaite m'inscrire avec le code parrain LONGRICH-CI"
                            target="_blank"
                            class="inline-flex items-center justify-center w-full bg-longrich-green text-white px-4 py-2 rounded-md hover:bg-longrich-green-dark transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            S'inscrire avec ce code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyCode() {
            const code = 'LONGRICH-CI';
            navigator.clipboard.writeText(code).then(() => {
                alert('Code copié !');
            }).catch(err => {
                console.error('Erreur lors de la copie :', err);
            });
        }
    </script>
</main>

<?php
// Inclure le footer
require_once __DIR__ . '/includes/footer.php';
?>