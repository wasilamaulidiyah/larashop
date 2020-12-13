<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\GangguanPernafasan;
use Auth;
use DB;

class PernafasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pernapasans = DB::table('gangguan_pernafasans')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($pernapasans as $pernapasan){
            if($id_user == $pernapasan->user_id){
                array_push($array_tmp, $pernapasan);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/diagnosahewan/diagnosapernafasan", ['pernapasans'=>$pernapasans]);
        }
        else{
            return view("/themes/diagnosahewan/diagnosapernafasan", ['pernapasans'=>$array_tmp]);
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
        $pernapasan = new GangguanPernafasan();
        $pernapasan->user_id = Auth::user()->id;
        $pernapasan->soal1 = $request->input('soal1');
        $pernapasan->soal2 = $request->input('soal2');
        $pernapasan->soal3 = $request->input('soal3');
        $pernapasan->soal4 = $request->input('soal4');
        $pernapasan->soal5 = $request->input('soal5');
        $pernapasan->soal6 = $request->input('soal6');
        $pernapasan->feedback = "";
        $pernapasan->save();

        return redirect('/diagnosapernafasan');
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
        $pernapasan = GangguanPernafasan::find($id);
        $pernapasan->soal1 = $request->input('soal1');
        $pernapasan->soal2 = $request->input('soal2');
        $pernapasan->soal3 = $request->input('soal3');
        $pernapasan->soal4 = $request->input('soal4');
        $pernapasan->soal5 = $request->input('soal5');
        $pernapasan->soal6 = $request->input('soal6');
        $pernapasan->feedback = $request->input('feedback');
        $pernapasan->save();

        return redirect('/diagnosapernafasan');
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
