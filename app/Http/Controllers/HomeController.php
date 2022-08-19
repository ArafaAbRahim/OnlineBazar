<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $products = Product::where('status', 1)->latest()->limit(12)->get();
        $product_cat = Category::where('status', 1)->latest()->limit(3)->get();

        return view('frontend.welcome', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'products', 'product_cat'));
    }

    public function view_details($id){
        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();
        $units = Unit::all();
        $product = Product::findOrFail($id);
        $sizes = Size::findOrFail($product->size_id);
        $colors = Color::findOrFail($product->color_id);   
        
        $cat_id = $product->cat_id;
        $related_products = Product::where('cat_id', $cat_id)->where('status', 1)->limit(4)->get();

        return view('frontend.pages.view_details', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'product', 'related_products'));
        
    }
}