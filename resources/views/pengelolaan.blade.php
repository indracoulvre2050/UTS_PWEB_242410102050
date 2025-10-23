@extends('layouts.app')

@section('title', 'Product Management - WaveShop')

@section('content')
<div class="bg-white rounded-2xl shadow-xl p-8">
    <div class="mb-8">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent mb-2">
            Product Management
        </h1>
        <p class="text-gray-600 text-lg">Manage inventory and product catalog</p>
    </div>

    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <input type="text" 
               id="searchInput"
               placeholder="Search products..." 
               class="flex-1 px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition">
        
        <select id="categoryFilter"
                class="md:w-56 px-4 py-3 border-2 border-gray-200 rounded-xl focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition">
            <option value="all">All Categories</option>
            <option value="Audio">Audio</option>
            <option value="Wearables">Wearables</option>
            <option value="Accessories">Accessories</option>
            <option value="Storage">Storage</option>
            <option value="Camera">Camera</option>
        </select>
    </div>

    <div class="overflow-x-auto mb-8">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white">
                <tr>
                    <th class="px-4 py-4 text-left font-semibold">ID</th>
                    <th class="px-4 py-4 text-left font-semibold">Product Name</th>
                    <th class="px-4 py-4 text-left font-semibold">Category</th>
                    <th class="px-4 py-4 text-left font-semibold">Price</th>
                    <th class="px-4 py-4 text-left font-semibold">Stock</th>
                    <th class="px-4 py-4 text-left font-semibold">Status</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                @foreach($products as $product)
                <tr class="border-b border-gray-200 hover:bg-gray-50 transition" data-category="{{ $product['category'] }}" data-name="{{ strtolower($product['name']) }}">
                    <td class="px-4 py-4">{{ $product['id'] }}</td>
                    <td class="px-4 py-4">
                        <strong>{{ $product['name'] }}</strong>
                    </td>
                    <td class="px-4 py-4">
                        <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">{{ $product['category'] }}</span>
                    </td>
                    <td class="px-4 py-4 font-semibold text-purple-600">
                        Rp {{ number_format($product['price'], 0, ',', '.') }}
                    </td>
                    <td class="px-4 py-4">
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium {{ $product['stock'] == 0 ? 'bg-red-100 text-red-700' : 'bg-green-100 text-green-700' }}">
                            {{ $product['stock'] }} units
                        </span>
                    </td>
                    <td class="px-4 py-4">
                        <span class="inline-block px-3 py-1 rounded-full text-sm font-medium {{ $product['status'] == 'Available' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $product['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pt-8 border-t-2 border-gray-200">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Inventory Summary</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="p-4 bg-gray-100 rounded-xl flex justify-between items-center">
                <span class="text-gray-600 font-medium">Total Products:</span>
                <span class="text-2xl font-bold text-purple-600">{{ count($products) }}</span>
            </div>
            <div class="p-4 bg-gray-100 rounded-xl flex justify-between items-center">
                <span class="text-gray-600 font-medium">Available:</span>
                <span class="text-2xl font-bold text-purple-600">{{ count(array_filter($products, fn($p) => $p['status'] == 'Available')) }}</span>
            </div>
            <div class="p-4 bg-gray-100 rounded-xl flex justify-between items-center">
                <span class="text-gray-600 font-medium">Out of Stock:</span>
                <span class="text-2xl font-bold text-purple-600">{{ count(array_filter($products, fn($p) => $p['status'] == 'Out of Stock')) }}</span>
            </div>
            <div class="p-4 bg-gray-100 rounded-xl flex justify-between items-center">
                <span class="text-gray-600 font-medium">Total Units:</span>
                <span class="text-2xl font-bold text-purple-600">{{ array_sum(array_column($products, 'stock')) }}</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const searchInput = document.querySelector('#searchInput');
    const categoryFilter = document.querySelector('#categoryFilter');
    const tableBody = document.querySelector('#productTableBody');
    const rows = tableBody.querySelectorAll('tr');

    searchInput.addEventListener('keyup', filterTable);
    categoryFilter.addEventListener('change', filterTable);

    function filterTable() {
        const searchValue = searchInput.value.toLowerCase();
        const categoryValue = categoryFilter.value;

        rows.forEach(row => {
            const productName = row.getAttribute('data-name');
            const productCategory = row.getAttribute('data-category');
            
            const matchesSearch = productName.includes(searchValue);
            const matchesCategory = categoryValue === 'all' || productCategory === categoryValue;
            
            if (matchesSearch && matchesCategory) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
</script>
@endsection