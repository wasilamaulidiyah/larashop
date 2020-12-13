<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelAnjing;
use Auth;
use DB;

class ArtikelAnjingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikelanjings = DB::table('artikel_anjings')->select()->get();
        
        return view("/themes/artikel/artikelanjing", ['artikelanjings'=>$artikelanjings]);
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
        $artikelanjing = new ArtikelAnjing();
        $artikelanjing->user_id = Auth::user()->id;
        $artikelanjing->judul= $request->input('judul');
        $artikelanjing->author = $request->input('author');
        $artikelanjing->konten = $request->input('konten');
        $artikelanjing->save();
        
        return redirect('/artikelanjing');
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
        $artikel = ArtikelAnjing::find ($id);
        return view("/themes/artikel/artikel", ["artikel" => $artikel, "is_kucing" => false]);
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
        $artikel = ArtikelAnjing::find ($id);
        $artikel->judul= $request->input('judul');
        $artikel->author = $request->input('author');
        $artikel->konten = $request->input('konten');
        $artikel->save();
        
        return redirect('/artikelanjing');
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
