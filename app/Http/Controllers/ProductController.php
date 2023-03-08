<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Results;
use App\Models\ProductResearch;
use App\Models\Category;
use Image;
use Str;
use Auth;
use File; 

class ProductController extends Controller
{
    public function index()
    {
        $title = isset($_GET['title']) ? $_GET['title'] : ''; 
        $categories = isset($_GET['categories']) ? $_GET['categories'] : ''; 
        $country = isset($_GET['country']) ? $_GET['country'] : ''; 
        $buy_price = isset($_GET['buy_price']) ? $_GET['buy_price'] : ''; 
        $sell_price = isset($_GET['sell_price']) ? $_GET['sell_price'] : ''; 
 
        $products = ProductResearch::orderby('id', 'desc');
 
        if(!empty($title)){
            $products->where('title','like','%'.trim($title).'%');
        }
        if(!empty($categories)){
            $products->where('categories','like','%'.trim($categories).'%');
        }

        if(!empty($country)){
            $products->where('country','like','%'.trim($country).'%');
        }
        if(!empty($buy_price)){
            $products->where('buy_price','like','%'.trim($buy_price).'%');

        }
        if(!empty($sell_price)){
            $products->where('sell_price','like','%'.trim($sell_price).'%');
        }

        $products = $products->paginate(12);
        $categories = Category::orderby('id', 'desc')->get();
 
        return view('products/index', compact('products','categories'));
    }
    
    public function view($slug)
    {
        $product = ProductResearch::where('slug', $slug)->first();
        return view('products/view', compact('product'));
    }   
}
