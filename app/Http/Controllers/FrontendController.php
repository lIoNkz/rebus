<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class FrontendController extends Controller
{
      public function index()
      {
       	return view('frontend.index', compact('menu'));
      }

   	public function news()
   	{
   		return view('frontend.news');
   	}

   	public function about()
   	{
   		return view('frontend.about');
   	}

   	public function warranty()
   	{
   		return view('frontend.warranty');
   	}

   	public function brand()
   	{
   		return view('frontend.brand');
   	}

   	public function category($id)
   	{
         $products = Product::where('category_id', $id)->get();
         $category = Category::where('id', $id)->first()->name;
         
   		return view('frontend.category', compact('products'))->with('category', $category);
   	}

      public function subcategory($id)
      {
         $categories = Category::children($id);

         $category = Category::find($id)->name;
         
         return view('frontend.subcategory', compact('categories'))->with('category', $category);

      }

   	public function product($id)
   	{
         $product = Product::find($id);
         $category = Category::find($product->category_id)->name;

   		return view('frontend.product', compact('product'))->with('category', $category);
   	}

   	public function service()
   	{
   		return view('frontend.service-centers');
   	}

   	public function vacancy()
   	{
   		return view('frontend.vacancies');
   	}

   	public function fillform()
   	{
   		return view('frontend.fillform');
   	}

   	public function contacts()
   	{
   		return view('frontend.contacts');
   	}

}
