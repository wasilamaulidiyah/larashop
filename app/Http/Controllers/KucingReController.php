<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\KucingRemaja;
use Auth;

class KucingReController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/themes/ezone/perkembanganhewan/kucing");
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
        $kucingre = new KucingRemaja();
        $kucingre->user_id = Auth::user()->id;
        $kucingre->soal1= $request->input('soal1');
        $kucingre->soal2 = $request->input('soal2');
        $kucingre->soal3 = $request->input('soal3');
        $kucingre->soal4 = $request->input('soal4');
        $kucingre->soal5 = $request->input('soal5');
        $kucingre->soal6 = $request->input('soal6');
        $kucingre->soal7 = $request->input('soal7');
        $kucingre->save();

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
