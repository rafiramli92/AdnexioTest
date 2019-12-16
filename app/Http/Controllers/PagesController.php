<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Numbers;

class PagesController extends Controller
{
   public function index()
   {
        $numbers = Numbers::all();
        $foo = 'Adnexio Test';

        return view('welcome', 
            compact([
                'numbers',
                'foo'])
        );
   }

   public function contact()
   {
       return view('contact');
   }
}
