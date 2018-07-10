<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
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

   	public function brand($id ='')
   	{
   		return view('frontend.brand');
   	}

   	public function category($id ='')
   	{
   		return view('frontend.category');
   	}

   	public function product($id ='')
   	{
   		return view('frontend.product');
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
