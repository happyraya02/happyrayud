<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\coffee;
use File;
use Session;
use Auth;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::orderBy('created_at','desc')->get();
        return view('backend.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coffee = coffee::all();
        return view('backend.transaksi.create', compact('coffee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new transaksi();
        $transaksi->nama = $request->nama;
        $transaksi->id_coffee = $request->id_coffee;
        $transaksi->jumlah_kopi = $request->jumlah_kopi;
        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>
                $transaksi->nama_kopi </b>!"
        ]);
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('backend.transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        return view('backend.transaksi.edit', compact('transaksi'));
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
        $transaksi = transaksi::findOrFail($id);
        $transaksi->nama = $request->nama;
        $transaksi->id_coffee = $request->id_coffee;
        $transaksi->jumlah_kopi = $request->jumlah_kopi;
        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                . $transaksi->nama_kopi . "</b>!"
        ]);
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrfail($id);
        if(!$transaksi::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                . $transaksi->$transaksi."</b>"
        ]);
        return redirect()->route('transaksi.index');
    }
}
