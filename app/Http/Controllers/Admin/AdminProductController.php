<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Results;
use App\Models\ProductResearch;
use App\Models\Category;
use Image;
use Str;
use Auth;
use File; 

use Goutte\Client;

class AdminProductController extends Controller
{
    protected $euro_rate;

    public function __construct()
    {
        $this->euro_rate = env('EURO_RATE');
    }

    public function index()
    {
        $name = isset($_GET['name']) ? $_GET['name'] : ''; 
        $categories = isset($_GET['categories']) ? $_GET['categories'] : ''; 
        $profits = isset($_GET['profits']) ? $_GET['profits'] : ''; 
        $sell_price = isset($_GET['sell_price']) ? $_GET['sell_price'] : ''; 
 
        $products = ProductResearch::orderby('id', 'desc');
 
        if(!empty($name)){
            $products->where('name','like','%'.trim($name).'%');
        }
        if(!empty($categories)){
            $products->where('categories','like','%'.trim($categories).'%');
        }
        if(!empty($profits)){
            $products->where('profits','like','%'.trim($profits).'%');
        }
        if(!empty($sell_price)){
            $products->where('sell_price','like','%'.trim($sell_price).'%');
        }

        $products = $products->paginate(12);
        $categories = Category::orderby('id', 'desc')->get();
         
        return view('products/admin/index',compact('products','categories'));
    }

    public function create()
    {
        $categories = Category::orderby('id', 'desc')->get();
        return view('products/admin/create', compact('categories'));
    }
    
    public function store(Request $request)
    {
        // return $request->all();  
        $request->validate([  
            'title'             =>  "required|string|max:255|min:5", 
            'categories'        =>  "required|array|min:1",  
            // 'aliexpress_product_id' => 'nullable|numeric',
            'buy_price'         =>  "required|numeric",
            'sell_price'        =>  "required|numeric",
            'short_description' =>  "required|string|max:455",
            // 'aliexpress_link'   =>  "required|string",  
            // 'url'               =>  "required|array|min:1",
            // 'eng_heart'         =>  "numeric",
            // 'eng_comment'       =>  "numeric",
            // 'eng_reaction'      =>  "numeric",
            // 'cpa'               =>  "string|max:255",
            // 'net'               =>  "string|max:255",
            // 'total_order'       =>  "numeric",
            // 'country'           =>  "string|max:25",
            // 'gender'            =>  "string|max:25",
            // 'age'               =>  "string|max:100",
            // 'audience'          =>  "string|max:100",
            // 'interests'         =>  "string|min:1",
            'images'            =>  "required|array|min:1",
        ],[
            'aliexpress_product_id.numeric' => 'This is not a vallid link contains product ID!',
        ]);

        $slug = Str::slug($request->title);
        $product = new ProductResearch;
  
        $product->title             =   $request->title; 
        $product->slug              =   $slug;
        $product->categories        =   isset($request->categories) ? implode(",",$request->categories) : '';
        $product->buy_price         =   $request->buy_price; 
        $product->sell_price        =   $request->sell_price; 
        $product->aliexpress_link   =   $request->aliexpress_link; 
        $product->fb_ads            =   $request->fb_ads; 
        $product->video_link        =   $request->video_link; 
        $product->fb_ads_img        =   $request->fb_ads_img; 
        $product->video_link_img    =   $request->video_link_img; 
        $product->url               =   isset($request->url) ? implode(",",$request->url) : '';
        $product->eng_heart         =   $request->eng_heart; 
        $product->eng_comment       =   $request->eng_comment; 
        $product->eng_share         =   $request->eng_share; 
        $product->eng_reaction      =   $request->eng_reaction; 
        $product->cpa               =   $request->cpa; 
        $product->net               =   $request->net; 
        $product->total_order       =   $request->total_order; 
        $product->total_review      =   $request->total_review; 
        $product->avg_rating        =   $request->avg_rating; 
        $product->country           =   $request->country; 
        $product->gender            =   $request->gender; 
        $product->age               =   $request->age; 
        $product->audience          =   $request->audience; 
        $product->interests         =   $request->interests;
        $product->short_description =   $request->short_description; 
        $product->description       =   $request->description; 
        $product->status            =   $request->status;   
       
        $images = array();
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            if( !is_null($files) ){ 
                if( File::exists('assets/images/product/' . $product->images) ) {
                    File::delete('assets/images/product/' . $product->images);
                }

                foreach ($files as $file) {
                    $imageName = $slug .'-'.md5(rand(1000, 10000)) . '.' . $file->getClientOriginalExtension();
                    $file->move('assets/images/product/',$imageName);
    
                    $images[] = asset('assets/images/product/'.$imageName);
                }
            } 
        }
        $product->images = json_encode($images);
 
        $product->save();
        $product->slug = $slug.'-'.$product->id;
        $product->save();
        $notification = session()->flash("success", "Product Create Successfully");

        return redirect()->route('admin_products_list')->with($notification);
    }
    
    public function view($slug)
    {
        $product = ProductResearch::where('slug', $slug)->first();
        return view('products/admin/view', compact('product'));
    } 

    public function edit($slug)
    {
        $categories = Category::orderby('id', 'desc')->get();
        $product = ProductResearch::where('slug', $slug)->first();
        return view('products/admin/edit', compact('product','categories'));
    }

    public function update(Request $request, $slug)
    {
        // return $slug->all();

        $request->validate([  
            'title'             =>  "required|string|max:255|min:5", 
            'categories'        =>  "required|array|min:1",  
            'buy_price'         =>  "required|numeric",
            'sell_price'        =>  "required|numeric",
            'short_description' =>  "required|string|max:455",
            'aliexpress_link'   =>  "required|string",  
            'url'               =>  "required|array|min:1",
            'eng_heart'         =>  "required|numeric",
            'eng_comment'       =>  "required|numeric",
            'eng_reaction'      =>  "required|numeric",
            'cpa'               =>  "required|string|max:255",
            'net'               =>  "required|string|max:255",
            'total_order'       =>  "required|numeric",
            'country'           =>  "required|string|max:25",
            'gender'            =>  "required|string|max:25",
            'age'               =>  "required|string|max:100",
            'audience'          =>  "required|string|max:100",
            'interests'         =>  "required|string|min:1", 
        ]);


        $product = ProductResearch::firstWhere('slug', $slug); 
        $slug = Str::slug($request->title);
  
        $product->title             =   $request->title; 
        $product->slug              =   $slug;
        $product->categories        =   isset($request->categories) ? implode(",",$request->categories) : '';
        $product->buy_price         =   $request->buy_price; 
        $product->sell_price        =   $request->sell_price; 
        $product->aliexpress_link   =   $request->aliexpress_link; 
        $product->fb_ads            =   $request->fb_ads; 
        $product->video_link        =   $request->video_link; 
        $product->fb_ads_img        =   $request->fb_ads_img; 
        $product->video_link_img    =   $request->video_link_img; 
        $product->url               =   isset($request->url) ? implode(",",$request->url) : '';
        $product->eng_heart         =   $request->eng_heart; 
        $product->eng_comment       =   $request->eng_comment; 
        $product->eng_share         =   $request->eng_share; 
        $product->eng_reaction      =   $request->eng_reaction; 
        $product->cpa               =   $request->cpa; 
        $product->net               =   $request->net; 
        $product->total_order       =   $request->total_order; 
        $product->review            =   $request->review; 
        $product->country           =   $request->country; 
        $product->gender            =   $request->gender; 
        $product->age               =   $request->age; 
        $product->audience          =   $request->audience; 
        $product->interests         =   $request->interests;
        $product->short_description =   $request->short_description; 
        $product->description       =   $request->description; 
        $product->status            =   $request->status;   
       
        $images = array();
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            if( !is_null($files) ){ 
                if( File::exists('assets/images/product/' . $product->images) ) {
                    File::delete('assets/images/product/' . $product->images);
                }

                foreach ($files as $file) {
                    $name = $slug .'-'.md5(rand(1000, 10000)) . '.' . $file->getClientOriginalExtension();
                    $file->move('assets/images/product/',$name);
    
                    $images[] = $name;
                }
            }  
        } 
        $product->images = json_encode($images);
 
        $product->save();
        $product->slug = $slug.'-'.$product->id;
        $product->save();
        $notification = session()->flash("success", "Product Updated Successfully");

        return redirect()->route('admin_products_list')->with($notification);
    }

    public function destroy($slug)
    { 
        $product = ProductResearch::where('slug', $slug)->delete(); 

        $notification = session()->flash("success", "Product Deleted Successfully");
        return redirect()->route('admin_products_list')->with($notification);
    }

    public function addProductFromAliExpress(){
        return view('products/admin/create-ali-express');
    }

    public function storeProductFromAliExpress(Request $request){
        $request->validate([  
            'aliexpress_id'     =>  "required"
        ]);

        $id = $request->aliexpress_id;
        
        if (is_numeric($id)) {
            $id = $id;
        } else {
            preg_match('/item\/(\d+)\.html/', $id, $match);
            $id = $match[1];
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ali-express1.p.rapidapi.com/product/$id?language=nl",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ali-express1.p.rapidapi.com",
		        "X-RapidAPI-Key: 3bd49cc9a2mshcb77124c32d8c10p1cf884jsn17365dd46829"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
            $notification = session()->flash("error", "Server Error:" . $err);
            return redirect()->back()->with($notification);
        } else {
            $jsonProduct = json_decode($response);
            if(isset($jsonProduct->info)){
                $notification = session()->flash("error", "Product Not Found");
                return redirect()->back()->with($notification);
            }

            $categories = [];
            $origin = '';
            if(isset($jsonProduct->specsModule)){
                foreach($jsonProduct->specsModule->props as $prop){
    
                    if(strtolower($prop->attrName) === 'category'){
                        $categories[] = $prop->attrValue;
                    }
    
                    if(strtolower($prop->attrName) === 'origin'){
                        $origin = $prop->attrValue;
                    }
        
                    if(strtolower($prop->attrName) === 'item type'){
                        $categories[] = $prop->attrValue;
                    }
        
                    if(strtolower($prop->attrName) === 'feature'){
                        $categories[] = $prop->attrValue;
                    }
        
                    if(strtolower($prop->attrName) === 'style'){
                        $categories[] = $prop->attrValue;
                    }
        
                    if(strtolower($prop->attrName) === 'brand name'){
                        $categories[] = $prop->attrValue;
                    }
                    
                    if(strtolower($prop->attrName) === 'type'){
                        $categories[] = $prop->attrValue;
                    }
                }
            }
            
            $title = htmlspecialchars_decode($jsonProduct->titleModule->subject); 
            $slug = Str::slug($title);

            $price_str = str_replace('US $', '', $jsonProduct->priceModule->formatedActivityPrice);
            $price_arr = explode(' - ', $price_str);
            $min_price = floatval($price_arr[0]);
            $buy_price = intval($min_price * $this->euro_rate);

            $sell_price = (mt_rand(240, 300) / 100) *  $buy_price;

            $product = ProductResearch::firstWhere('aliexpress_id', $id);
            $message    = "Product Updated Successfully";
            if (!$product) {
                $product = new ProductResearch;
                $message = "Product Added Successfully";
            }
    
           
            
            // $images = $jsonProduct->imageModule->imagePathList;

            // foreach($images as $image){
            //     $name = $slug .'-'.md5(rand(1000, 10000)) . '.jpg';
            //     $image = file_get_contents($image);
            //     file_put_contents('assets/images/product/'.$name, $image);
            //     $imageNames [] = asset('assets/images/product/'.$name);
            // }
            // $product->images                =   json_encode($imageNames);

            $product->images                =   json_encode($jsonProduct->imageModule->imagePathList);

            if(isset($jsonProduct->imageModule->videoUid) && isset($jsonProduct->imageModule->videoId)) {
                $product->ali_video_link            =   "https://video.aliexpress-media.com/play/u/ae_sg_item/{$jsonProduct->imageModule->videoUid}/p/1/e/6/t/10301/{$jsonProduct->imageModule->videoId}.mp4";
            }
            $product->short_description     =   $jsonProduct->pageModule->description; 
            $product->description_url       =   $jsonProduct->descriptionModule->descriptionUrl;
            $product->description           =   $jsonProduct->pageModule->description;
            $product->aliexpress_link       =   $jsonProduct->pageModule->itemDetailUrl; 
           
            $product->total_order           =   $jsonProduct->titleModule->formatTradeCount; 
            $product->total_review          =   $jsonProduct->titleModule->feedbackRating->totalValidNum;
            $product->avg_rating            =   $jsonProduct->titleModule->feedbackRating->evarageStar;
            $product->total_order           =   $jsonProduct->titleModule->formatTradeCount; 
            $product->buy_price             =   ($buy_price - 1) + .99; 
            $product->sell_price            =   intval($sell_price); 
            $product->discount              =   $jsonProduct->priceModule->discount; 
            $product->categories            =   isset($categories) ? implode(",",$categories) : '';
            $product->title                 =   $title;
            $product->slug                  =   $slug;
            $product->aliexpress_id         =   $id;
            $product->country               =   $origin;
            $product->status                =   'Active'; 
        
            $product->save();
            $product->slug = $slug.'-'.$product->id;
            $product->save();

            $notification = session()->flash("success", $message);

            return redirect()->route('admin_products_list')->with($notification);
        }
    }
}

// descriptionModule->descriptionUrl;
// imageModule->imagePathList[];
// imageModule->videoId
// imageModule->videoUid
// pageModule->description
// pageModule->itemDetailUrl
// storeModule->detailPageUrl
// titleModule->formatTradeCount (Order)
// priceModule->discountRatioTips
// priceModule->discount



// specsModule->props[]->attrName  Item Type , Origin , Feature , Style, Brand name , Category , Type
// specsModule->props[]->attrValue
// storeModule->storeURL
// titleModule->feedbackRating->evarageStar
// titleModule->feedbackRating->totalValidNum

// pageModule->imagePath (thumb)




        // $api_key = '373ee3b1643744ac81c440e0c5782b21'; // Replace with your own API key
        // $from_currency = 'USD';
        // $to_currency = 'EUR';
        // $url = "https://openexchangerates.org/api/latest.json?app_id=$api_key&base=$from_currency&symbols=$to_currency";

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);

        // if ($response) {
        //     $data = json_decode($response, true);
        //     $exchange_rate = $data['rates'][$to_currency];
        // } else {
        //     echo "Error: Unable to retrieve exchange rate data.";
        // }


     
       

        // Item Type , Origin , Feature , Style, Brand name , Category , Type

        // return $product;
       

        