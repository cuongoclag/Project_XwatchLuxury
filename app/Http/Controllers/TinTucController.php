<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\tin_tuc;

use Illuminate\Http\Request;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('frontend/tin_tuc/tin_tuc');
    // }
    public function index()
    {
        $list_tin_tuc = tin_tuc::paginate(3);
        return view('frontend/tin_tuc/tin_tuc',['list_tin_tuc'=>$list_tin_tuc]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tin_tuc_ct =DB::table('tin_tuc')->where('id',$id)->first();
        return view('frontend/tin_tuc/ct_tin_tin_tuc', ['tin_tuc_ct' => $tin_tuc_ct]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
