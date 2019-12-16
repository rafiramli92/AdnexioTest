<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Numbers;

class NumbersController extends Controller
{
    public function addValue()
    {
       $a = Numbers::find(request('id'));
       $a -> currentValue +=1;
       $a ->save();

       return ['Success'];
    }

    public function subValue()
    {
       $a = Numbers::find(request('id'));
       $a -> currentValue -=1;
       $a ->save();

       return ['Success'];
    }

}
