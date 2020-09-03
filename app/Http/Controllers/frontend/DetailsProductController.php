<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\feedback;

use Illuminate\Support\Facades\DB; 
class DetailsProductController extends FrontendController
{
    public function index(){
        return view('frontend.Chi_Tiet_San_Pham.Details_Product');
    }
    public function Feedback(Request $request){
        DB::table('feedback')->insert([ 
            'Customerid'=>$request->Customerid,
            'Title'=>$request->title,
            'Comment'=>$request->comment,
        ]);
        return redirect()->back(); 
    }
    
    public function phanhoi(){
        return view('frontend.phan_hoi.phanhoi');
    }

    public function Comment(Request $request){
        DB::table('comment')->join('product','product.Productid','=','comment.Productid')->insert([ 
            'Customerid'=>$request->Customerid,
            'ndcomment'=>$request->ndcomment,
            'Customername'=>$request->Customername,
            'Productid'=>$request->Productid,
        ]);
        return redirect()->back(); 
    }
    // public function Commentlist_FE()
    // { 
    //     $comment_fe = DB::table('comment')->get();
    //     return view('frontend.Chi_Tiet_San_Pham.Details_Product')->with('comment',$comment_fe);
    // }
}
