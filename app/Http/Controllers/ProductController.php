<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    public function list_product()
    {   
        $list_product = DB::table('product')
        ->join('typeproduct','typeproduct.Typeid','=','product.Typeid')
        ->orderby('product.Typeid','desc')
        ->get();
        $list_product = DB::table('product')->paginate(5);
        $manager_list_product = view('admin/product/product-list')->with('list_product',$list_product);
        return view('admin/layouts-admin/index')->with('admin/product/product-list',$manager_list_product);
    }

    public function active_product($Productid)
    {
        DB::table('product')
        ->where('Productid',$Productid)
        ->update(['Status' => 1]);
        return Redirect::to('admin/product/product-list');
    }

    public function unactive_product($Productid)
    {
        DB::table('product')
        ->where('Productid',$Productid)
        ->update(['Status' => 0]);

        return Redirect::to('admin/product/product-list');
    }
    public function hot_product($Productid)
    {
        DB::table('product')
        ->where('Productid',$Productid)
        ->update(['Hot' => 1]);

        return Redirect::to('admin/product/product-list');
    }
    public function unhot_product($Productid)
    {
        DB::table('product')
        ->where('Productid',$Productid)
        ->update(['Hot' => 0]);

        return Redirect::to('admin/product/product-list');
    }
    public function add_product()
    {
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();      
        return view('admin/product/product-add')->with('type',$type);

    }
    public function save_product(Request $request)
    {
        // $data = array();
        // $data['Productid'] = $request->txtProductid;
        // $data['Productname'] = $request->txtProductname;
        // $data['Typeid'] = $request->txtTypeid;
        // $data['WarrantyPeriod'] = $request->txtProductwarrantyperiod;
        // $data['Price'] = $request->txtProductprice;
        // $data['ProductDescription'] = $request->txtProductdesciption;
        // $data['Image'] = $request->txtProductimages;

        $Productid = $request->input('txtProductid');
        $checkProductid = DB::table('product')->where('Productid', $Productid)->first();
        if ($checkProductid) {
        return redirect()->back()->with('PidMessage', 'ID đã có');
        }
        
        $Productname = $request->input('txtProductname');
        $checkProductname = DB::table('product')->where('Productname', $Productname)->first();
        if ($checkProductname) {
        return redirect()->back()->with('PnameMessage', 'Tên Sản Phẩm đã có');
        }

        $Typeid = $request->input('txtTypeid');
        $Price = $request->input('txtProductprice');
        if ($Price < 0) {
        return redirect()->back()->with('PPrice', 'Giá không được âm');
        }else if($Price > 10000){
            return redirect()->back()->with('PPrice', 'Giá không vượt quá 10000$');
        }
        $Status = $request->input('txtStatus');
        $Hot = $request->input('txtHot');

        $ProductDescription = $request->input('txtProductDescription');
        $Image = $request->input('txtProductimages');

        $get_images = $request->file('txtProductimages');
        if($get_images){
            $get_name_images = $get_images->getClientOriginalName();
            $name_images = current(explode('.',$get_name_images));
            $new_images = $name_images.rand(0,99).".".$get_images->getClientOriginalExtension();       
            $get_images->move('frontend/dist/img/Nam',$new_images);
            // $data['Image'] = $new_images;
            // DB::table('product')->insert($data);
            $Image =  $new_images;
            DB::table('product')->insert([
                'Productid' => $Productid,
                'Productname' => $Productname,
                'Typeid' => $Typeid,
                'Price' => $Price,
                'Status' => $Status,
                'Hot' => $Hot,
                'ProductDescription' => $ProductDescription,
                'Image' => $Image,
            ]);
            return Redirect::to('admin/product/product-list');
        }
        // $data['Image'] = '';
        // DB::table('product')->insert($data);

        $Image = '';
        DB::table('product')->insert([
            'Productid' => $Productid,
            'Productname' => $Productname,
            'Typeid' => $Typeid,
            'Price' => $Price,
            'Status' => $Status,
            'Hot' => $Hot,
            'ProductDescription' => $ProductDescription,
'Image' => $Image,
        ]);
        return Redirect::to('admin/product/product-list');
    }
    public function edit_product($Productid)
    {
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();      
        $edit_product = DB::table('product')->where('Productid',$Productid)->get();
        $manager_list_product = view('admin/product/product-edit')->with('edit_product',$edit_product)->with('type',$type);
        return view('admin/layouts-admin/index')->with('admin/product/product-edit',$manager_list_product);
    }

    public function update_product(Request $request,$Productid)
    {
        $data = array();
        $data['Productid'] = $request->txtProductid;
        $data['Productname'] = $request->txtProductname;
        $data['Price'] = $request->txtProductprice;
        $data['Typeid'] = $request->txtTypeid;
        $data['ProductDescription'] = $request->txtProductdesciption;
        
        $get_image = $request->file('txtProductimages');

        if($get_image){
           
            $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('frontend/dist/img/Nam',$new_image);
                    $data['Image'] = $new_image;
                    DB::table('product')->where('Productid',$Productid)->update($data);
         
                    return Redirect::to('admin/product/product-list');
        }
        
        DB::table('product')->where('Productid',$Productid)->update($data);
        return Redirect::to('admin/product/product-list');

    
    }

    public function delete_product($Productid)
    {
        DB::table('product')->where('Productid',$Productid)->delete();
        return Redirect::to('admin/product/product-list');
    }

    // END ADMIN PAGE   

    public function details_product($Productid)
    {
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
        
        $details_product = DB::table('product')
        ->join('typeproduct','typeproduct.Typeid','=','product.Typeid')
        ->where('product.Productid',$Productid)
        ->get();
        
        $comment_fe = DB::table('comment')
        ->where('comment.Productid',$Productid)
        ->get();

        $info = view('frontend/Chi_Tiet_San_Pham/Details_Product')
        
        ->with('details_product', $details_product)
        ->with('comment_fe',$comment_fe);


        return view('layouts.app_master_frontend')->with('frontend/Chi_Tiet_San_Pham/Details_Product', $info);
        // $count = 0;
        // foreach ($details_product as $detail) {
        // $count++;
	}

	// if ($count == 0) {
	// 	return view('frontend/Chi_Tiet_San_Pham/Details_Product_Khong_Ton_Tai');
	// }

    //     return view('frontend/Chi_Tiet_San_Pham/Details_Product')
    //     ->with('info',$info);
    
    // }

    // public function postComment(Request $request, $Productid){
    // $comment_new = new Comment;
    // $comment_new->Customerid = $request->Customerid;
    // $comment_new->Customername = $request->$Customername;
    // $comment_new->Productid = $Productid;
    // $comment_new->ndcomment = $request->$ndcomment;
    // $comment_new->save();
    // return back();
    // } 
}
