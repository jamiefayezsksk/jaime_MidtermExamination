<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Inception', 'director' => 'Christopher Nolan', 'year' => 2010],
            ['title' => 'The Shawshank Redemption', 'director' => 'Frank Darabont', 'year' => 1994],
        ];
        return view('products.index', compact('products'));
    }
}
