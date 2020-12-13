<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelPet;
use Auth;
use DB;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = DB::table('artikel_pets')->select()->get();

        return view("/themes/artikel/artikel", ['artikels'=>$artikels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new ArtikelPet();
        $artikel->user_id = Auth::user()->id;
        $artikel->judul= $request->input('judul');
        $artikel->author = $request->input('author');
        $artikel->konten = $request->input('konten');
        $artikel->save();
        
        return redirect('/artikel');
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
        $this->validate($request, [
            'judul' => 'required',
            'author' => 'required',
            'konten' => 'required'
        ]);
        
        $artikel-> update([
            'judul' => \Str::slug($request->judul),
            'author' => $request->author,
            'konten' => $request->konten,
        ]);
        // $artikel = ArtikelPet::find($id);
        // $artikel->user_id = Auth::user()->id;
        // $artikel->judul= $request->input('judul');
        // $artikel->author = $request->input('author');
        // $artikel->konten = $request->input('konten');
        // $artikel->save();
        
        return redirect('/artikel');
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
