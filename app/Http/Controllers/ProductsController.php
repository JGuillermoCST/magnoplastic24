<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFeature;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductsController extends Controller {

    public function index() {

        $categories = Category::all();
        $products = Product::all();

        return view('store', ['products' => $products, 'cats' => $categories]);
    }

    public function siteIndex() {

        $products = Product::where('featured', '=', true)->get();
        return view('index', ['fprods' => $products]);
    }

    public function siteBudget() {

        $products = Product::all();
        return view('budget', ['prods' => $products]);
    }

    public function siteSell() {

        $products = Product::all();
        return view('sell', ['prods' => $products]);
    }

    public function search(Request $r) {

        if ($r->cat_id == 0) {
            $products = Product::all();
        } else {
            $products = Product::where('category_id', '=', $r->cat_id)->get();
        }

        return view('components.products-list', ['products' => $products]);
    }

    public function show($id) {

        $product = Product::where('id', '=', $id)->first();
        $imgs = ProductImage::where('product_id', '=', $product->id)->get();
        $feats = ProductFeature::where('product_id', '=', $product->id)->get();

        return view('product-details', ['product' => $product, 'imgs' => $imgs, 'feats' => $feats]);
    }
}
