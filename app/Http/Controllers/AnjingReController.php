<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\AnjingRemaja;
use Auth;
use DB;

class AnjingReController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anjingres = DB::table('anjing_remajas')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($anjingres as $anjingre){
            if($id_user == $anjingre->user_id){
                array_push($array_tmp, $anjingre);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/ezone/perkembanganhewan/anjing", ['anjingres'=>$anjingres]);
        }
        else{
            return view("/themes/ezone/perkembanganhewan/anjing", ['anjingres'=>$array_tmp]);
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
        $anjingre = new AnjingRemaja();
        $anjingre->user_id = Auth::user()->id;
        $anjingre->soal1= $request->input('soal1');
        $anjingre->soal2 = $request->input('soal2');
        $anjingre->soal3 = $request->input('soal3');
        $anjingre->soal4 = $request->input('soal4');
        $anjingre->soal5 = $request->input('soal5');
        $anjingre->soal6 = $request->input('soal6');
        $anjingre->soal7 = $request->input('soal7');
        $anjingre->feedback = "";
        $anjingre->save();

        return redirect('/anjingre');
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
        $anjingre = AnjingRemaja::find($id);
        $anjingre->soal1= $request->input('soal1');
        $anjingre->soal2 = $request->input('soal2');
        $anjingre->soal3 = $request->input('soal3');
        $anjingre->soal4 = $request->input('soal4');
        $anjingre->soal5 = $request->input('soal5');
        $anjingre->soal6 = $request->input('soal6');
        $anjingre->soal7 = $request->input('soal7');
        $anjingre->feedback = $request->input('feedback');
        $anjingre->save();

        return redirect('/anjingre');
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
