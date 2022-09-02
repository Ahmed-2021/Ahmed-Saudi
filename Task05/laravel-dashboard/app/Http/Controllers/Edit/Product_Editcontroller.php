<?php

namespace App\Http\Controllers\Edit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product_Editcontroller extends Controller
{
    public function Product_Edit($id)
    {
        $product = DB::table('products')->where("id", "=", $id)->first();
        $brands = DB::table("brands")->select("id", "name_ar", "name_en")->get();
        $sub_gategories = DB::table("sub_categories")->select("id", "name_ar", "name_en")->get();

        return view("Edit.product_Edit", compact("product", "brands", "sub_gategories"));
    }


    // public function Change_Title(Request $request, $id)
    // {
    //     DB::table('products')->where("id",  $id)->update([

    //         "name_ar" => $request->name_ar,
    //         "name_en" => $request->name_en

    //     ]);
    //     return response("succes");
    // }
}