<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\AnjingDewasa;
use Auth;
use DB;

class HasilAdeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anjingdes = DB::table('anjing_dewasas')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($anjingdes as $anjingde){
            if($id_user == $anjingde->user_id){
                array_push($array_tmp, $anjingde);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/ezone/perkembanganhewan/hasilade", ['anjingdes'=>$anjingdes]);
        }
        else{
            return view("/themes/ezone/perkembanganhewan/hasilade", ['anjingdes'=>$array_tmp]);
        }
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
        $anjingde = new AnjingDewasa();
        $anjingde->user_id = Auth::user()->id;
        $anjingde->soal1 = $request->input('soal1');
        $anjingde->soal2 = $request->input('soal2');
        $anjingde->soal3 = $request->input('soal3');
        $anjingde->soal4 = $request->input('soal4');
        $anjingde->soal5 = $request->input('soal5');
        $anjingde->soal6 = $request->input('soal6');
        $anjingde->feedback = '';
        $anjingde->save();

        return redirect('/hasilade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $anjingde = AnjingDewasa::find($id);
        $anjingde->soal1= $request->input('soal1');
        $anjingde->soal2 = $request->input('soal2');
        $anjingde->soal3 = $request->input('soal3');
        $anjingde->soal4 = $request->input('soal4');
        $anjingde->soal5 = $request->input('soal5');
        $anjingde->soal6 = $request->input('soal6');
        $anjingde->feedback = $request->input('feedback');
        $anjingde->save();

        return redirect('/hasilade');
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
