<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Diagnosa;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kulits = DB::table('gangguan_kulits')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($kulits as $kulit){
            if($id_user == $kulit->user_id){
                array_push($array_tmp, $kulit);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/diagnosahewan/diagnosa", ['kulits'=>$kulits]);
        }
        else{
            return view("/themes/diagnosahewan/diagnosa", ['kulits'=>$array_tmp]);
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
        $kulit = new GangguanKulit();
        $kulit->user_id = Auth::user()->id;
        $kulit->soal1 = $request->input('soal1');
        $kulit->soal2 = $request->input('soal2');
        $kulit->soal3 = $request->input('soal3');
        $kulit->soal4 = $request->input('soal4');
        $kulit->soal5 = $request->input('soal5');
        $kulit->soal6 = $request->input('soal6');
        $kulit->feedback = "";
        $kulit->save();

        return redirect('/diagnosa');
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
        $kulit = GangguanKulit::find($id);
        $kulit->user_id = Auth::user()->id;
        $kulit->soal1 = $request->input('soal1');
        $kulit->soal2 = $request->input('soal2');
        $kulit->soal3 = $request->input('soal3');
        $kulit->soal4 = $request->input('soal4');
        $kulit->soal5 = $request->input('soal5');
        $kulit->soal6 = $request->input('soal6');
        $kulit->feedback = $request->input('feedback');
        $kulit->save();

        return redirect('/diagnosa');
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
