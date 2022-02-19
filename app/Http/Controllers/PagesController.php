<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
   public function homepage()
   {
       return view('pages.homepage.index');
   }
   public function about()
   {
       return view('pages.aboutUs.about');
   }
   public function contact()
   {
       return view('pages.contact.contact');
   }
}
