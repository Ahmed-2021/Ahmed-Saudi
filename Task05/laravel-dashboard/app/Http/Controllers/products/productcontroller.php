<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class productcontroller extends Controller
{


    public function get_product()
    {

        $products = DB::table("products")->get();
        return view("products.All_product", compact("products"));
    }
}