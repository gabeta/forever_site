<?php
// Inclure les fonctions utilitaires
require_once __DIR__ . '/includes/functions.php';

// Définir les variables pour le header
$pageTitle = 'Comment ça marche - Longrich Côte d\'Ivoire';
$pageDescription = 'Découvrez comment fonctionne Longrich, ses produits et comment devenir membre.';

// Inclure le header
require_once __DIR__ . '/includes/header.php';

// Fonction pour formater le prix en CFA
function formatPrice($price)
{
    return number_format($price, 0, ',', ' ') . 'CFA';
}
?>

<main id="content" class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-longrich-green to-longrich-green-dark text-white rounded-lg p-8 mb-8">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold mb-4">Comment ça marche</h2>
            <p class="text-lg mb-6">Découvrez le fonctionnement de Longrich et comment devenir membre.</p>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- What is Longrich -->
        <section class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Qu'est-ce que Longrich ?</h3>
            <p class="text-gray-600 mb-4">
                Longrich est une entreprise multinationale spécialisée dans la fabrication et la distribution de produits de santé, de beauté et de bien-être. Fondée en 1986, l'entreprise s'est développée pour devenir l'un des leaders mondiaux dans son secteur.
            </p>
            <p class="text-gray-600">
                La société propose une large gamme de produits, notamment des compléments alimentaires, des produits cosmétiques, des produits de soins personnels et des appareils de santé.
            </p>
        </section>

        <!-- System Reliability -->
        <section class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">La fiabilité du système</h3>
            <p class="text-gray-600 mb-4">
                Le système de distribution de Longrich est basé sur un modèle de marketing de réseau qui a fait ses preuves. Les produits sont fabriqués selon des normes strictes de qualité et sont distribués à travers un réseau de distributeurs indépendants.
            </p>
            <p class="text-gray-600">
                Chaque distributeur bénéficie d'une formation complète et d'un soutien continu pour assurer le succès de leur entreprise.
            </p>
        </section>

        <!-- How to Become a Member -->
        <section class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Comment devenir membre ?</h3>
            <p class="text-gray-600 mb-4">
                Pour devenir membre de Longrich, vous devez choisir l'une des catégories suivantes :
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Consommateurs : Accès aux produits à prix préférentiel</li>
                <li>Distributeurs : Possibilité de créer votre propre entreprise</li>
                <li>Investisseurs : Opportunités d'investissement dans le développement de l'entreprise</li>
            </ul>
        </section>

        <!-- Where to Buy -->
        <section class="bg-white rounded-lg shadow-sm p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Où acheter les produits ?</h3>
            <p class="text-gray-600 mb-4">
                Les produits Longrich sont disponibles à travers notre réseau de distributeurs officiels. Vous pouvez :
            </p>
            <ul class="list-disc list-inside text-gray-600 space-y-2">
                <li>Visiter notre boutique en ligne</li>
                <li>Contacter un distributeur local</li>
                <li>Visiter un point de vente officiel</li>
            </ul>
        </section>
    </div>

    <!-- Call to Action -->
    <div class="mt-8 text-center">
        <a href="index.php" class="inline-block bg-longrich-green text-white px-6 py-3 rounded-md font-medium hover:bg-longrich-green-dark transition-colors">
            Découvrir nos produits
        </a>
    </div>
</main>

<?php
// Inclure le footer
require_once __DIR__ . '/includes/footer.php';
?>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        mobileMenu.classList.toggle('active');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
</script>
</rewritten_file>