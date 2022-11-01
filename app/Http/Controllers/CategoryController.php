<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = category::all();
        return view('admin.dashboard.categories',compact('category'));
    }

   

    public function addcategory()
    {
       
        return view('admin.dashboard.addcategory');
    }




    public function savecategory(Request $request)
    {
       $category = new category;

       $category->categories = $request->categories;
       $category->save();
       return redirect('categories');

    }

   

   
}
