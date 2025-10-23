<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WaveShop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-500 via-purple-600 to-indigo-700 min-h-screen flex items-center justify-center p-5">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-4xl w-full grid md:grid-cols-2">
        <div class="bg-gradient-to-br from-purple-500 to-indigo-700 p-12 text-white flex flex-col justify-center">
            <svg class="w-20 h-20 mb-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <polyline points="9 22 9 12 15 12 15 22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="text-5xl font-bold mb-5">WaveShop</h1>
            <p class="text-lg opacity-90 leading-relaxed">Welcome to your ultimate destination for premium tech products and accessories. Login to access your personalized dashboard and manage your inventory.</p>
        </div>
        
        <div class="p-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-3">Welcome Back!</h2>
            <p class="text-gray-600 mb-8">Please login to your account</p>
            
            <form action="{{ route('login.process') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required
                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition">
                </div>
                <button type="submit" 
                        class="w-full bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-4 rounded-xl font-semibold text-lg hover:shadow-xl hover:-translate-y-1 transition transform">
                    Login
                </button>
            </form>
            
            <div class="mt-6 p-4 bg-gray-100 rounded-xl text-sm text-gray-600">
                <strong>Login Access:</strong> Enter any username to continue
            </div>
        </div>
    </div>
</body>
</html>