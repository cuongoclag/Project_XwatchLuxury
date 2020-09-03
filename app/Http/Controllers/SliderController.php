<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
class SliderController extends Controller
{
    public function slider_manage(){
    	$all_slide = DB::table('slider')->orderBy('Sliderid','DESC')->paginate(5);
    	return view('admin.slider.silder-manage')->with('all_slide',$all_slide);
    }
    public function slider_add(){
    	return view('admin.slider.slider-add');
    }
    public function unactive_slider($Sliderid){
        DB::table('slider')->where('Sliderid',$Sliderid)->update(['Sliderstatus'=>0]);
        return Redirect::to('admin/slider/slider-manage');

    }
    public function active_slider($Sliderid){
        DB::table('slider')->where('Sliderid',$Sliderid)->update(['Sliderstatus'=>1]);
        return Redirect::to('admin/slider/slider-manage');

    }

    public function insert_slider(Request $request){

        $Sliderid = $request->input('Sliderid');
        $Slidername = $request->input('Slidername');
        $Sliderstatus = $request->input('Sliderstatus');
        $Sliderimage = $request->input('Sliderimage');
        $get_image = $request->file('Sliderimage');
      
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('frontend/dist/img/Slider', $new_image);
            $Sliderimage = $new_image;
            DB::table('slider')->insert([
                'Sliderid' => $Sliderid,
                'Slidername' => $Slidername,
                'Sliderimage' => $Sliderimage,
                'Sliderstatus' => $Sliderstatus,
            ]);
            return Redirect::to('admin/slider/slider-manage');
        } 	
    }
    public function delete_slider(Request $request, $Sliderid){
        DB::table('slider')->where('Sliderid',$Sliderid)->delete();
        return Redirect::to('admin/slider/slider-manage');

    }
}
