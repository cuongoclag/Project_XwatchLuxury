<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comment;

use Illuminate\Support\Facades\DB; 
class CommentController extends Controller
{
    public function Commentlist()
    { 
    //Truy vấn toàn bộ dữ liệu trong bảng comment
        $comment = DB::table('comment')->get();
        return view('admin/comment/cmt-list')->with(['comment' => $comment]);
    }

    //delete 
	public function delete_Comment($user)
	{
		$member = DB::table('comment')
			->where("commentid", $user)
			->delete();
		return redirect()->action('CommentController@Commentlist');
	}
}