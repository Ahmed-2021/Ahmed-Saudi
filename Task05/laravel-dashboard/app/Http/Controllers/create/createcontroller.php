<?php

namespace App\Http\Controllers\create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class createcontroller extends Controller
{
    public function create_product()
    {

        $brands = DB::table("brands")->select("id", "name_ar", "name_en")->get();
        $sub_gategories = DB::table("sub_categories")->select("id", "name_ar", "name_en")->get();
        return view("create.create", compact("brands", "sub_gategories"));
    }
}