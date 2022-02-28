<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;


class home extends Controller
{
    public function index()
    {
   $number = product::count();
          return view('products.home',compact('number')) ;
    }
}
