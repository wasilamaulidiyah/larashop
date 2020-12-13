<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelKucing;
use Auth;
use DB;

class ArtikelKucingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikelkucings = DB::table('artikel_kucings')->select()->get();
        
            return view("/themes/artikel/artikelkucing", ['artikelkucings'=>$artikelkucings]);
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
        $artikelkucing = new ArtikelKucing();
        $artikelkucing->user_id = Auth::user()->id;
        $artikelkucing->judul= $request->input('judul');
        $artikelkucing->author = $request->input('author');
        $artikelkucing->konten = $request->input('konten');
        $artikelkucing->save();
        
        return redirect('/artikelkucing');
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
        $artikel = ArtikelKucing::find ($id);
        return view("/themes/artikel/artikel", ["artikel" => $artikel, "is_kucing" => true]);
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
        $artikel = ArtikelKucing::find ($id);
        $artikel->judul= $request->input('judul');
        $artikel->author = $request->input('author');
        $artikel->konten = $request->input('konten');
        $artikel->save();
        
        return redirect('/artikelkucing');
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
