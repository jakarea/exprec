<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Category;
use Str;
use Illuminate\Validation\Rule;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderby('id', 'desc')->paginate(12); 
        return view('products/admin/category/index', compact('categories'));
    }

    public function create()
    {
        return view('products/admin/category/create');
    }

    public function store(Request $request)
    { 
        $request->validate([
            'name'      =>  "unique:categories|required|string|max:255", 
            'status'    =>  "required|not_in:0",
        ]);


        $slug = Str::slug($request->name);
        $category = new Category;
       

        $category->name          =   $request->name; 
        $category->slug          =   $slug;
        $category->status         =   $request->status;  
        $category->save();
        $category->slug = $slug.'-'.$category->id;
        $category->save();

        $notification = session()->flash("success", "Category Create Successfully");

        return redirect()->route('category_list')->with($notification);
    } 

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first(); 
        return view('products/admin/category/edit', compact('category'));
    }

    public function update(Request $request, $slug)
    { 
        $request->validate([
            'name'      =>  "unique:categories|required|string|max:50,20",
        ]);

        $category = Category::firstWhere('slug', $slug); 
        $slug = Str::slug($request->name);

        $category->name          =   $request->name;
        $category->slug          =   $slug;
        $category->status        =   $request->status;   
        $category->save();
        $category->slug = $slug.'-'.$category->id;
        $category->save();

        $notification = session()->flash("success", "Category Updated Successfully");

        return redirect()->route('category_list')->with($notification);
    } 

    public function destroy($slug)
    { 
        $category = Category::where('slug', $slug)->delete(); 

        $notification = session()->flash("success", "Category Deleted Successfully");
        return redirect()->route('category_list')->with($notification);
    }

}
