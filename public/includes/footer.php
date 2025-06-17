    <!-- Footer -->
    <footer class="bg-white border-t mt-16">
        <div class="container mx-auto px-4 py-8">
            <div class="text-center space-y-4">
                <div class="flex justify-center items-center space-x-2">
                    <span class="text-sm text-gray-600">Retour en haut</span>
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <span class="text-sm text-gray-600">Des produits à commander ?</span>
                </div>
                <div class="text-sm text-gray-600">Scan the code</div>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            mobileMenu.classList.toggle('active');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }

        function toggleCart() {
            const cartDropdown = document.getElementById('cartDropdown');
            cartDropdown.classList.toggle('active');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const cartDropdown = document.getElementById('cartDropdown');
            const cartButton = event.target.closest('button[onclick="toggleCart()"]');

            if (!cartButton && !cartDropdown.contains(event.target)) {
                cartDropdown.classList.remove('active');
            }
        });
    </script>
    </body>

    </html>