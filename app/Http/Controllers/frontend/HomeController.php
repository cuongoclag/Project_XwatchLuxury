<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        // $list_product = DB::table('product')
        // ->join('typeproduct','typeproduct.Typeid','=','product.Typeid')
        // ->orderby('product.Typeid','desc')
        // ->get();

        $hot_product = DB::table('product')
        ->orderby('Productid','desc')
        ->where('Hot',1)
        ->where('Status',1)
        ->limit(8)
        ->get();
    

        $new_product = DB::table('product')
        ->orderby('Productid','desc')
        ->where('Status',1)
        ->limit(8)
        ->get();

        $slider = DB::table('slider')
        ->orderby('Sliderid','desc')
        ->where('Sliderstatus',1)
        ->get();
        return view('frontend.home.index_frontend')->with('new_product',$new_product)->with('hot_product',$hot_product)->with('slider',$slider);
    }
}