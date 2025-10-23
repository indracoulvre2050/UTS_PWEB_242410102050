@extends('layouts.app')

@section('title', 'Dashboard - WaveShop')

@section('content')
<div class="bg-white rounded-2xl shadow-xl p-8 mb-6">
    <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent mb-2">
        Welcome back, {{ $username }}!
    </h1>
    <p class="text-gray-600 text-lg">Here's your store overview for today</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-2xl shadow-xl p-6 hover:-translate-y-2 transition transform">
        <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/icons/briefcase.svg') }}" alt="Briefcase" class="w-6 h-6">
            </div>
            <div>
                <h3 class="text-sm text-gray-600 mb-2">Total Products</h3>
                <p class="text-3xl font-bold text-gray-800 mb-1">248</p>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">+12% from last month</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-6 hover:-translate-y-2 transition transform">
        <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-gradient-to-br from-pink-400 to-red-500 rounded-2xl flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/icons/shopping-cart.svg') }}" alt="Cart" class="w-6 h-6">
            </div>
            <div>
                <h3 class="text-sm text-gray-600 mb-2">Orders Today</h3>
                <p class="text-3xl font-bold text-gray-800 mb-1">89</p>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">+24% from yesterday</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-6 hover:-translate-y-2 transition transform">
        <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-2xl flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/icons/revenue.svg') }}" alt="Revenue" class="w-6 h-6">
            </div>
            <div>
                <h3 class="text-sm text-gray-600 mb-2">Revenue</h3>
                <p class="text-3xl font-bold text-gray-800 mb-1">Rp 5.2M</p>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">+18% from last week</span>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-6 hover:-translate-y-2 transition transform">
        <div class="flex items-start gap-4">
            <div class="w-14 h-14 bg-gradient-to-br from-pink-400 to-yellow-400 rounded-2xl flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/icons/customers.svg') }}" alt="Customer" class="w-6 h-6">
            </div>
            <div>
                <h3 class="text-sm text-gray-600 mb-2">Customers</h3>
                <p class="text-3xl font-bold text-gray-800 mb-1">1,542</p>
                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">+8% growth</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-xl p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Quick Actions</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
           class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-purple-500 to-indigo-600 text-white rounded-xl font-medium hover:shadow-xl hover:-translate-y-1 transition transform">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                <path d="M20 7h-4V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span>Manage Products</span>
        </a>
        <a href="{{ route('profile', ['username' => $username]) }}" 
           class="flex items-center gap-3 px-6 py-4 bg-gradient-to-r from-purple-500 to-indigo-600 text-white rounded-xl font-medium hover:shadow-xl hover:-translate-y-1 transition transform">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span>View Profile</span>
        </a>
    </div>
</div>
@endsection