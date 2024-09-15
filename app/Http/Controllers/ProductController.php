<?php


namespace App\Http\Controllers;

// import model product
use App\Models\Product;

// impor juga return type view
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function index() : View
 {
    // ini untuk menampilkan seluruh data yang ada di table produk yang dengan latest mengambil data terbaru
    $products = Product::latest()->paginate(10);

    // nah ini untuk menampilkan ke halaman viewnya
    return view('products.index', compact('products'));
 }   
}
