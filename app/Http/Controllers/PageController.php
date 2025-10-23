<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        $products = [
            [
                'id' => 1,
                'name' => 'Wireless Headphones',
                'category' => 'Audio',
                'price' => 1250000,
                'stock' => 45,
                'status' => 'Available'
            ],
            [
                'id' => 2,
                'name' => 'Smart Watch Series 5',
                'category' => 'Wearables',
                'price' => 3500000,
                'stock' => 28,
                'status' => 'Available'
            ],
            [
                'id' => 3,
                'name' => 'Mechanical Keyboard RGB',
                'category' => 'Accessories',
                'price' => 850000,
                'stock' => 62,
                'status' => 'Available'
            ],
            [
                'id' => 4,
                'name' => 'Gaming Mouse Pro',
                'category' => 'Accessories',
                'price' => 650000,
                'stock' => 0,
                'status' => 'Out of Stock'
            ],
            [
                'id' => 5,
                'name' => 'USB-C Hub 7-in-1',
                'category' => 'Accessories',
                'price' => 450000,
                'stock' => 35,
                'status' => 'Available'
            ],
            [
                'id' => 6,
                'name' => 'Portable SSD 1TB',
                'category' => 'Storage',
                'price' => 1800000,
                'stock' => 18,
                'status' => 'Available'
            ],
            [
                'id' => 7,
                'name' => 'Webcam 4K Ultra HD',
                'category' => 'Camera',
                'price' => 2100000,
                'stock' => 22,
                'status' => 'Available'
            ],
            [
                'id' => 8,
                'name' => 'Bluetooth Speaker',
                'category' => 'Audio',
                'price' => 750000,
                'stock' => 0,
                'status' => 'Out of Stock'
            ]
        ];

        return view('pengelolaan', compact('products', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}