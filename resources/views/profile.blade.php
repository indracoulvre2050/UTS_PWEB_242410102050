@extends('layouts.app')

@section('title', 'Profile - WaveShop')

@section('content')
<div class="max-w-5xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl p-8 mb-6">
        <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            <div class="w-28 h-28 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center flex-shrink-0">
                <img src="{{ asset('assets/icons/users.svg') }}" alt="Users" class="w-6 h-6">
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $username }}</h1>
                <p class="text-purple-600 font-semibold mb-1">Store Administrator</p>
                <p class="text-gray-600">{{ strtolower($username) }}@waveshop.com</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-8 mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Performance Statistics</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/icons/briefcase.svg') }}" alt="Briefcase" class="w-6 h-6">
                </div>
                <div>
                    <p class="text-sm text-gray-600 mb-1">Products Managed</p>
                    <p class="text-2xl font-bold text-gray-800">248</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-red-500 rounded-xl flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/icons/shopping-cart.svg') }}" alt="Cart" class="w-6 h-6">
                </div>
                <div>
                    <p class="text-sm text-gray-600 mb-1">Orders Processed</p>
                    <p class="text-2xl font-bold text-gray-800">1,234</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-xl flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/icons/star.svg') }}" alt="Star" class="w-6 h-6">
                </div>
                <div>
                    <p class="text-sm text-gray-600 mb-1">Customer Rating</p>
                    <p class="text-2xl font-bold text-gray-800">4.9/5.0</p>
                </div>
            </div>
            <div class="flex items-center gap-4 p-4 bg-gray-50 rounded-xl">
                <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-yellow-400 rounded-xl flex items-center justify-center flex-shrink-0">
                    <img src="{{ asset('assets/icons/award.svg') }}" alt="Award" class="w-6 h-6">
                </div>
                <div>
                    <p class="text-sm text-gray-600 mb-1">Achievement Points</p>
                    <p class="text-2xl font-bold text-gray-800">2,450</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Account Information</h2>
            <div class="space-y-4">
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <span class="text-gray-600 font-medium">Username</span>
                    <span class="text-gray-800 font-semibold">{{ $username }}</span>
                </div>
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <span class="text-gray-600 font-medium">Email</span>
                    <span class="text-gray-800 font-semibold">{{ strtolower($username) }}@waveshop.com</span>
                </div>
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <span class="text-gray-600 font-medium">Role</span>
                    <span class="text-gray-800 font-semibold">Administrator</span>
                </div>
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <span class="text-gray-600 font-medium">Member Since</span>
                    <span class="text-gray-800 font-semibold">October 2025</span>
                </div>
                <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                    <span class="text-gray-600 font-medium">Location</span>
                    <span class="text-gray-800 font-semibold">Jember, East Java</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-600 font-medium">Account Status</span>
                    <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">Active</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex items-center gap-4 pb-4 border-b border-gray-200">
                    <div class="w-11 h-11 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        <img src="{{ asset('assets/icons/package.svg') }}" alt="Package" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-medium mb-1">Updated product inventory</p>
                        <p class="text-sm text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 pb-4 border-b border-gray-200">
                    <div class="w-11 h-11 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        <img src="{{ asset('assets/icons/check.svg') }}" alt="Check" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-medium mb-1">Processed 15 orders</p>
                        <p class="text-sm text-gray-500">5 hours ago</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 pb-4 border-b border-gray-200">
                    <div class="w-11 h-11 bg-green-100 text-green-600 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        <img src="{{ asset('assets/icons/customers.svg') }}" alt="Customers" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-medium mb-1">Added 3 new customers</p>
                        <p class="text-sm text-gray-500">1 day ago</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-xl flex-shrink-0">
                        <img src="{{ asset('assets/icons/bar-chart.svg') }}" alt="bar" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <p class="text-gray-800 font-medium mb-1">Generated monthly report</p>
                        <p class="text-sm text-gray-500">2 days ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Quick Settings</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <button class="flex items-center gap-3 px-5 py-4 bg-gray-50 border-2 border-transparent rounded-xl hover:bg-white hover:border-purple-500 hover:text-purple-600 hover:-translate-y-1 transition transform font-medium text-gray-800">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    <path d="M12 1v6m0 6v6m9-9h-6m-6 0H3" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Change Password</span>
            </button>
            <button class="flex items-center gap-3 px-5 py-4 bg-gray-50 border-2 border-transparent rounded-xl hover:bg-white hover:border-purple-500 hover:text-purple-600 hover:-translate-y-1 transition transform font-medium text-gray-800">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="2"/>
                    <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Email Preferences</span>
            </button>
            <button class="flex items-center gap-3 px-5 py-4 bg-gray-50 border-2 border-transparent rounded-xl hover:bg-white hover:border-purple-500 hover:text-purple-600 hover:-translate-y-1 transition transform font-medium text-gray-800">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" stroke="currentColor" stroke-width="2"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Notifications</span>
            </button>
            <button class="flex items-center gap-3 px-5 py-4 bg-gray-50 border-2 border-transparent rounded-xl hover:bg-white hover:border-purple-500 hover:text-purple-600 hover:-translate-y-1 transition transform font-medium text-gray-800">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="11" width="18" height="11" rx="2" stroke="currentColor" stroke-width="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>Security Settings</span>
            </button>
        </div>
    </div>
</div>
@endsection