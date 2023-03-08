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

class AdminProductController extends Controller
{
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
            'images'            =>  "required|array|min:1",
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
}
