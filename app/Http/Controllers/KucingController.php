<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Kitten;
use Auth;
use Illuminate\Support\Facades\DB;

class KucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kucings = DB::table('kittens')->select()->get();

        $id_user = Auth::user()->id;
        $array_tmp = array();

        foreach($kucings as $kucing){
            if($id_user == $kucing->user_id){
                array_push($array_tmp, $kucing);
            }
        }

        if(Auth::user()->is_admin == 1){
            return view("/themes/ezone/perkembanganhewan/kucing", ['kucings'=>$kucings]);
        }
        else{
            return view("/themes/ezone/perkembanganhewan/kucing", ['kucings'=>$array_tmp]);
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
        $kucing = new Kitten();
        $kucing->user_id = Auth::user()->id;
        $kucing->soal1 = $request->input('soal1');
        $kucing->soal2 = $request->input('soal2');
        $kucing->soal3 = $request->input('soal3');
        $kucing->soal4 = $request->input('soal4');
        $kucing->soal5 = $request->input('soal5');
        $kucing->soal6 = $request->input('soal6');
        $kucing->soal7 = $request->input('soal7');
        $kucing->soal8 = $request->input('soal8');
        $kucing->soal9 = $request->input('soal9');
        $kucing->feedback = "";
        $kucing->save();

        
        return redirect('/kucing');

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
        $kucing = Kitten::find($id);
        $kucing->soal1 = $request->input('soal1');
        $kucing->soal2 = $request->input('soal2');
        $kucing->soal3 = $request->input('soal3');
        $kucing->soal4 = $request->input('soal4');
        $kucing->soal5 = $request->input('soal5');
        $kucing->soal6 = $request->input('soal6');
        $kucing->soal7 = $request->input('soal7');
        $kucing->soal8 = $request->input('soal8');
        $kucing->soal9 = $request->input('soal9');
        $kucing->feedback = $request->input('feedback');
        $kucing->save();
        return redirect('/kucing');
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
