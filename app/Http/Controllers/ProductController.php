<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product; 

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'kaos laravel', 'price' => 150000],
        2 => ['name' => 'stiker coding', 'price' => 25000],
        3 => ['name' => 'notebook dev', 'price' => 50000],
    ];

    // menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }

    // menampilkan detail produk dari database
    public function show($id)
    {
        $product = $this->products[$id] ?? null;
    
        if (!$product) {
            abort(404, 'Produk tidak ditemukan.');
        }
    
        return view('products.show', compact('product'));
    }
    
        
}
