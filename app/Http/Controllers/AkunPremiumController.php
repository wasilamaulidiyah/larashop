<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\AkunPremium;

class AkunPremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/themes/akun/akunpremium");
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
        $vouchers = DB::table('akun_premia')->select('id','voucher','is_required')->get();
        $cust_voucher = $request->input('voucher');
        $is_valid = false;
        $user = \Auth::user();
        
        foreach ($vouchers as $value) {
            $voucher=AkunPremium::find($value->id);
            if(strcmp($cust_voucher, $voucher->voucher) == 0){
                if($voucher->is_required == 1){
                    $is_valid = true;
                    $voucher->is_required = 0;
                    $user->is_premium = 1;
                    $voucher->save();
                    $user->save();
                }

            }
          }
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
