<nav class="bg-white/10 backdrop-blur-lg shadow-lg">
    <div class="max-w-7xl mx-auto px-5 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-3">
                <img src="{{ asset('assets/icons/home.svg') }}" alt="Home" class="w-6 h-6">
                <span class="text-white text-2xl font-bold">WaveShop</span>
            </div>

            <button onclick="toggleMenu()" class="md:hidden text-white text-3xl focus:outline-none">
                ☰
            </button>

            <ul class="hidden md:flex items-center gap-8">
                <li><a href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}" class="text-white font-medium px-4 py-2 rounded-lg hover:bg-white/20 transition {{ Route::currentRouteName() == 'dashboard' ? 'bg-white/30' : '' }}">Dashboard</a></li>
                <li><a href="{{ route('pengelolaan', ['username' => $username ?? 'Guest']) }}" class="text-white font-medium px-4 py-2 rounded-lg hover:bg-white/20 transition {{ Route::currentRouteName() == 'pengelolaan' ? 'bg-white/30' : '' }}">Pengelolaan</a></li>
                <li><a href="{{ route('profile', ['username' => $username ?? 'Guest']) }}" class="text-white font-medium px-4 py-2 rounded-lg hover:bg-white/20 transition {{ Route::currentRouteName() == 'profile' ? 'bg-white/30' : '' }}">Profile</a></li>
                <li><a href="{{ route('login') }}" class="text-white font-medium px-4 py-2 rounded-lg bg-red-500/80 hover:bg-red-500 transition">Logout</a></li>
            </ul>
        </div>

        <div id="mobileMenu" class="hidden md:hidden mt-4 flex-col gap-3">
            <a href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}" class="block text-white font-medium px-4 py-3 rounded-lg hover:bg-white/20 transition text-center {{ Route::currentRouteName() == 'dashboard' ? 'bg-white/30' : '' }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username ?? 'Guest']) }}" class="block text-white font-medium px-4 py-3 rounded-lg hover:bg-white/20 transition text-center {{ Route::currentRouteName() == 'pengelolaan' ? 'bg-white/30' : '' }}">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username ?? 'Guest']) }}" class="block text-white font-medium px-4 py-3 rounded-lg hover:bg-white/20 transition text-center {{ Route::currentRouteName() == 'profile' ? 'bg-white/30' : '' }}">Profile</a>
            <a href="{{ route('login') }}" class="block text-white font-medium px-4 py-3 rounded-lg bg-red-500/80 hover:bg-red-500 transition text-center">Logout</a>
        </div>
    </div>
</nav>

<script>
    function toggleMenu() {
        const menu = document.querySelector('#mobileMenu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    }
</script>