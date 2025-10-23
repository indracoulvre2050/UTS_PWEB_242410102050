<footer class="bg-black/30 backdrop-blur-lg text-white mt-auto">
    <div class="max-w-7xl mx-auto px-5 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <div>
                <h3 class="text-2xl font-bold mb-4">WaveShop</h3>
                <p class="opacity-90 leading-relaxed">Your trusted partner for quality tech products and accessories.</p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('dashboard', ['username' => $username ?? 'Guest']) }}" class="opacity-90 hover:opacity-100 transition">Dashboard</a></li>
                    <li><a href="{{ route('pengelolaan', ['username' => $username ?? 'Guest']) }}" class="opacity-90 hover:opacity-100 transition">Products</a></li>
                    <li><a href="{{ route('profile', ['username' => $username ?? 'Guest']) }}" class="opacity-90 hover:opacity-100 transition">Profile</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                <p class="opacity-90 leading-relaxed">Email: 242410102050.unej.mail.ac.id</p>
                <p class="opacity-90 leading-relaxed">Phone: +62 895 3967 9915 6</p>
                <p class="opacity-90 leading-relaxed">Address: Jember, East Java</p>
            </div>
        </div>
        <div class="border-t border-white/20 pt-6 text-center opacity-80">
            <p>&copy; 2025 WaveShop</p>
        </div>
    </div>
</footer>