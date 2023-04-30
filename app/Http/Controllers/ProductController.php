<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Results;
use App\Models\ProductResearch;
use App\Models\FavoriteProduct;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


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
    
    public function insert_product($id)
    {


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://magic-aliexpress1.p.rapidapi.com/api/product/3256804150697616",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: magic-aliexpress1.p.rapidapi.com",
		"X-RapidAPI-Key: ceafd87ee7msha72e8d739828a1ap1e7889jsnb0c7254f17a8"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

    }

        public function view($slug)
        {
            $product = ProductResearch::where('slug', $slug)->first();
           
            return view('products/admin/view', compact('product'));
        }  
        
        public function myList(){
            $products = FavoriteProduct::where('user_id', Auth::user()->id)->with('product')->paginate(20);
            $categories = Category::orderby('id', 'desc')->get();
            return  $products;
            return view('products/favorite', compact('products','categories'));
        }

        public function addToList($id)
        {
            $FavoriteProduct = FavoriteProduct::firstWhere('product_id', $id);
            if(!$FavoriteProduct){
                $FavoriteProduct = new FavoriteProduct();
            }
            $FavoriteProduct->product_id = $id;
            $FavoriteProduct->user_id = Auth::user()->id;
            $FavoriteProduct->save();

            return redirect()->back()->with('success', 'Product added to your list');
        }

        public function removeFromList($id)
        {
            $FavoriteProduct = FavoriteProduct::firstWhere('product_id', $id);
            if($FavoriteProduct){
                $FavoriteProduct->delete();
            }

            return redirect()->back()->with('success', 'Product removed from your list');
        }
}
