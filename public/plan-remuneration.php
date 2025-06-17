<?php
// Inclure les fonctions utilitaires
require_once __DIR__ . '/includes/functions.php';

// Inclure le header
require_once __DIR__ . '/includes/header.php';

// Définir les variables de la page
$pageTitle = 'Plan de Rémunération - Longrich Côte d\'Ivoire';
$pageDescription = 'Découvrez les différentes façons dont Longrich récompense ses distributeurs.';
?>

<main id="content" class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-longrich-green to-longrich-green-dark text-white rounded-lg p-8 mb-8">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold mb-4">Plan de Rémunération</h2>
            <p class="text-lg mb-6">Découvrez comment Longrich récompense ses distributeurs de 10 manières différentes.</p>
        </div>
    </div>

    <!-- Disclaimer -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-yellow-700">
                    Ce site est une plateforme promotionnelle de l'occasion d'affaires Longrich pour ceux ou celles qui désirent intégrer notre équipe. Il ne constitue pas une plateforme de support, veuillez donc contacter votre parrain ou sponsor pour toute assistance.
                </p>
            </div>
        </div>
    </div>

    <!-- Introduction -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <p class="text-gray-600 mb-4">
            Cette partie concerne uniquement les distributeurs et les investisseurs… Pas pour les simples consommateurs.
        </p>
        <p class="text-gray-600">
            Longrich récompense ses distributeurs de 10 différentes manières : 6 en espèces sonnantes (cash) et 4 en nature.
        </p>
    </div>

    <!-- Cash Bonuses -->
    <div class="mb-12">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Bonus en Espèces</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Bonus de vente au détail -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de vente au détail</h4>
                <p class="text-gray-600">
                    Tous les distributeurs de Longrich bénéficient d'un prix de gros sur tous les produits. Ils peuvent revendre leurs produits au prix de détail avec une marge bénéficiaire de 20%. Et le bénéfice, c'est pour vous, le distributeur.
                </p>
            </div>

            <!-- Bonus de parrainage -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de parrainage</h4>
                <p class="text-gray-600">
                    Avec Longrich, chaque distributeur qui inscrit ou parraine un nouveau distributeur obtient un bonus de 20.000 à 60.000 FCFA. Ceci constitue le bonus de parrainage payable en 1 fois. Et vous pouvez parrainer autant de personnes que possible à Longrich. Aucune limite.
                </p>
            </div>

            <!-- Bonus de performance -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de performance</h4>
                <p class="text-gray-600">
                    Ce bonus est calculé sur la base des PV générés dans la semaine par votre équipe. Selon votre niveau d'entrée, il est calculé avec 8% pour les Q-Silver et Silver, 10% pour les Gold et 12% pour les Platinium et VIP.
                </p>
            </div>

            <!-- Bonus de développement -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de développement</h4>
                <p class="text-gray-600">
                    Comme le bonus de performance, votre bonus de développement se calcule sur la base des PV générés dans la semaine. A la seule différence que le pourcentage appliqué est de 10% en lieu et place des niveaux d'entrée.
                </p>
            </div>

            <!-- Bonus de Leadership -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de Leadership</h4>
                <p class="text-gray-600">
                    C'est un pourcentage qui s'applique sur le bonus de performance de tous ceux que vous avez parrainé directement et de leurs filleuls. Il s'obtient de la 1ère à la 12ème génération à votre réseau de parrainage. Ce bonus va de pair avec le grade du parrain.
                </p>
            </div>

            <!-- Bonus de Maintenance -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de Maintenance</h4>
                <p class="text-gray-600">
                    Ce bonus n'est pas obligatoire. Mais toutes les fois que vous consommez personnellement des produits d'une valeur de 30 PV par mois, Longrich vous paie 810 FCFA par distributeur de votre équipe qui en fait de même.
                </p>
            </div>
        </div>
    </div>

    <!-- Nature Bonuses -->
    <div class="mb-12">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Bonus en Nature</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Bonus de voyage -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de voyage</h4>
                <p class="text-gray-600">
                    Chaque année, Longrich offre à ses distributeurs méritants des voyages vers diverses destinations: Chine, USA, Tanzanie, Turquie, Afrique du Sud, Singapour, Dubaï, …. Vous ne déboursez rien comme argent pour ce merveilleux séjour dans un hôtel 5 étoiles.
                </p>
            </div>

            <!-- Bonus de voitures -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de voitures</h4>
                <p class="text-gray-600">
                    Année après année, Longrich organise des cérémonies de remise de véhicules neufs sortis de chez les concessionnaires à l'endroit de ses distributeurs qui ont pu relever les challenges préalablement définis. On pourrait observer des voitures de marque Mercedes, Toyota, Suzuki, Hyundai, Range Rover.
                </p>
            </div>

            <!-- Bonus de bourse -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de bourse</h4>
                <p class="text-gray-600">
                    Bénéficiez d'une bourse d'études de 30.000.000 FCFA et d'un chèque promotionnel pour étudier dans une des universités de Longrich. Soit vous continuez les études en faisant un MBA (Master en Administration des Affaires), soit vous offrez cette bourse à vos enfants ou proches.
                </p>
            </div>

            <!-- Bonus de maison -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h4 class="text-xl font-bold text-gray-900 mb-4">Bonus de maison</h4>
                <p class="text-gray-600">
                    Une maison de 90.000.000 FCFA vous attend à Longrich. En 5 ans d'activités, c'est possible de réaliser ce rêve de tout homme qui est de posséder sa propre maison. Ceci vaut mieux que de payer une maison à crédit sur 30 ans.
                </p>
            </div>
        </div>
    </div>

    <!-- Conclusion -->
    <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
        <p class="text-gray-600 mb-4">
            Tout ça pour avoir un jour décidé de consommer et recommander les produits de cette merveilleuse compagnie qu'est Longrich. Il n'y a pas d'entreprise de marketing relationnel qui offre de tels avantages. Longrich reste un business solide et imbattable.
        </p>
        <p class="text-gray-600 font-semibold">
            L'avenir est vraiment radieux avec Longrich ! C'est pas du rêve mais la pure réalité.
        </p>
    </div>

    <!-- Call to Action -->
    <div class="text-center">
        <a href="comment-ca-marche.php" class="inline-block bg-longrich-green text-white px-6 py-3 rounded-md font-medium hover:bg-longrich-green-dark transition-colors">
            Découvrir comment devenir distributeur
        </a>
    </div>
</main>

<?php
// Inclure le footer
require_once __DIR__ . '/includes/footer.php';
?>