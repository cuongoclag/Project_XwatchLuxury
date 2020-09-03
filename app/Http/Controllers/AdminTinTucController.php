<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Http\Requests\StoreTinTucPost;

use App\Http\Requests\StoreEditTinTuc;

use Illuminate\Support\Facades\DB;

use App\tin_tuc;

class AdminTinTucController extends Controller
{
    public function New_List()
    {
    $tin_tuc = DB::table('tin_tuc')->get();
    return view('admin/tin_tuc/list-tin-tuc')->with(['tin_tuc' => $tin_tuc]);
    }
    //delete 
	public function delete_new($user)
	{
		$member = DB::table('tin_tuc')
			->where("id", $user)
			->delete();
		return redirect()->action('AdminTinTucController@New_List');
    }
    public function Add_New() 
    {
         return view('admin/tin_tuc/add-tin-tuc');
    } 
    public function store(StoreTinTucPost $request)
    {
        $validated = $request->validated();
        $name_hinh = '';
        if($request->hasFile('hinh')){
            if($request->file('hinh')->isValid()){
                $file = $request->file('hinh');
                $name = $file->getClientOriginalName();
                $file->move('public/hinh_tin_tuc' , $name);
                $inputs = $request->all();
                $name_hinh = $name;
            }
        }
        //create post
        $add_tintuc = new tin_tuc;
        $add_tintuc->name= $request->tieu_de;
        $add_tintuc->short_description = $request->tom_tat;
        $add_tintuc->detail = $request->chi_tiet;
        $add_tintuc->image = $name_hinh;
        $add_tintuc->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $add_tintuc->save();
        return redirect('admin/tin_tuc/list-tin-tuc')->with('alert','Add success');
    }
    public function SuaTinTuc($id)
    {
        $edit_tintuc = tin_tuc::find($id);
        return view('admin/tin_tuc/sua_tin_tuc', ['edit_tintuc'=>$edit_tintuc]);
    }
    public function postSuaTinTuc(StoreEditTinTuc $request, $id)
    {
        $edit_tintuc = tin_tuc::find($id);
        $validated = $request->validated();
        $name_hinh = '';
        if($request->hasFile('hinh')){
            if($request->file('hinh')->isValid()){
                $file = $request->file('hinh');
                $name = $file->getClientOriginalName();
                $file->move('public/hinh_tin_tuc' , $name);
                $inputs = $request->all();
                $name_hinh = $name;
            }
        }
        $edit_tintuc->name = $request->tieu_de;
        $edit_tintuc->short_description = $request->tom_tat;
        $edit_tintuc->detail = $request->chi_tiet;
        $edit_tintuc->image = $name_hinh;
        $edit_tintuc->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $edit_tintuc->save();
        return redirect('admin/tin_tuc/list-tin-tuc')->with('alert','Bạn đã sửa thành công');
    }
} 
