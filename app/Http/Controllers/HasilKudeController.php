<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\KucingDewasa;
use Auth;
use Illuminate\Support\Facades\DB;

class HasilKudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kucingdes = DB::table('kucing_dewasas')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($kucingdes as $kucingde){
            if($id_user == $kucingde->user_id){
                array_push($array_tmp, $kucingde);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/ezone/perkembanganhewan/hasilkude", ['kucingdes'=>$kucingdes]);
        }
        else{
            return view("/themes/ezone/perkembanganhewan/hasilkude", ['kucingdes'=>$array_tmp]);
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
        $kucingde = new KucingDewasa();
        $kucingde->user_id = Auth::user()->id;
        $kucingde->soal1= $request->input('soal1');
        $kucingde->soal2 = $request->input('soal2');
        $kucingde->soal3 = $request->input('soal3');
        $kucingde->soal4 = $request->input('soal4');
        $kucingde->soal5 = $request->input('soal5');
        $kucingde->soal6 = $request->input('soal6');
        $kucingde->feedback = "";
        $kucingde->save();

        return redirect('/kucingde');
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
        $kucingde = KucingDewasa::find($id);
        $kucingde->soal1 = $request->input('soal1');
        $kucingde->soal2 = $request->input('soal2');
        $kucingde->soal3 = $request->input('soal3');
        $kucingde->soal4 = $request->input('soal4');
        $kucingde->soal5 = $request->input('soal5');
        $kucingde->soal6 = $request->input('soal6');
        $kucingde->feedback = $request->input('feedback');
        $kucingde->save();
        return redirect('/kucingde');
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
