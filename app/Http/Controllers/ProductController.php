<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            (object) ['image' => 'https://dummyimage.com/300x200/000/fff', 'name' => 'Product 1', 'description' => 'Description for Product 1', 'price' => '$10'],
            (object) ['image' => 'https://dummyimage.com/300x200/000/fff', 'name' => 'Product 2', 'description' => 'Description for Product 2', 'price' => '$20'],
            // Tambahkan produk lainnya
        ];

        return view('product', compact('products'));
    }

    public function showDetail()
    {
        // Data detail produk, sesuaikan dengan ID produk yang dipilih
        // $product = (object) ['id' => $id, 'image' => 'https://dummyimage.com/400x400', 'name' => 'Product ' . $id, 'description' => 'Description for Product ' . $id, 'price' => '$' . (10 * $id)];

        return view('detail');
    }
}
