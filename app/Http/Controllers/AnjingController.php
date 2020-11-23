<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Puppy;
use Auth;


class AnjingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/themes/ezone/perkembanganhewan/anjing");
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
        $anjing = new Puppy ();
        $anjing->user_id = Auth::user()->id;
        $anjing->soal1= $request->input('soal1');
        $anjing->soal2 = $request->input('soal2');
        $anjing->soal3 = $request->input('soal3');
        $anjing->soal4 = $request->input('soal4');
        $anjing->soal5 = $request->input('soal5');
        $anjing->soal6 = $request->input('soal6');
        $anjing->soal7 = $request->input('soal7');
        $anjing->soal8 = $request->input('soal8');
        $anjing->soal9 = $request->input('soal9');
        $anjing->save();


        return redirect('/anjing');
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
