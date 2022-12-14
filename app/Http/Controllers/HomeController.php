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
use Illuminate\Support\Facades\DB;

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

        $top_sales = DB::table('products')
            ->leftJoin('order_details','products.id','=','order_details.product_id')
            ->selectRaw('products.id, SUM(order_details.product_sales_quantity) as total')
            ->groupBy('products.id')
            ->orderBy('total','desc')
            ->take(8)
            ->get();
        $topProducts = [];
        foreach ($top_sales as $s){
            $p = Product::findOrFail($s->id);
            $p->totalQty = $s->total;
            $topProducts[] = $p;
        }

        return view('frontend.welcome', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'products', 'product_cat', 'topProducts'));
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

    public function product_by_category($id){

        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();
        $products = Product::where('status', 1)->where('cat_id', $id)->limit(12)->get();

        return view('frontend.pages.product_by_cat', compact('categories', 'subcategories', 'brands', 'products'));

    }

    public function product_by_subcategory($id){

        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();
        $products = Product::where('status', 1)->where('subcat_id', $id)->limit(12)->get();

        return view('frontend.pages.product_by_subcat', compact('categories', 'subcategories', 'brands', 'products'));

    }

    public function product_by_brand($id){

        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();
        $products = Product::where('status', 1)->where('brand_id', $id)->limit(12)->get();

        return view('frontend.pages.product_by_brand', compact('categories', 'subcategories', 'brands', 'products'));

    }

    public function search(Request $request){

        $products = Product::orderBy('id', 'desc')->where('name', 'LIKE', '%'.$request->product.'%');
        if($request->category != "all") $products->where('cat_id', $request->category);
        $products = $products->get();

        $categories = Category::where('status', 1)->get();;
        $subcategories = SubCategory::all();       
        $brands = Brand::all();        

        return view('frontend.pages.product_by_cat', compact('categories', 'subcategories', 'brands', 'products'));
    }
}