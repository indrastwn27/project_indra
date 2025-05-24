<header class="bg-green-700 text-white text-center py-6 px-12">
    <a href="#" class="text-2xl font-bold">SampahBaik</a>
    <button class="md:hidden block" id="menu-toggle">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </button>
    <div class="hidden md:flex md:space-x-6 text-sm font-medium">
        <a href="#" class="hover:text-green-200">Home</a>
        <a href="#" class="hover:text-green-200">Tentang</a>
        <a href="#" class="hover:text-green-200">Layanan</a>
        <a href="#" class="hover:text-green-200">Kontak</a>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden py-4 px-4 space-y-2 text-sm font-medium bg-green-600">
        <a href="#" class="block hover:text-green-100">Home</a>
        <a href="#" class="block hover:text-green-100">Tentang</a>
        <a href="#" class="block hover:text-green-100">Layanan</a>
        <a href="#" class="block hover:text-green-100">Kontak</a>
    </div>
</header>

<script>
    // Toggle menu for mobile
    document.getElementById("menu-toggle").addEventListener('click', function() {
        const mobileMenu = document.getElementById("mobile-menu");
        mobileMenu.classList.toggle("hidden");
    });
</script>