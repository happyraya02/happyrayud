<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use File;
use Session;
use Auth;
use Illuminate\Queue\Jobs\SyncJob;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::orderBy('created_at','desc')->get();
        return view('backend.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug ($request->nama_kategori, '_');
        $kategori->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>
                $kategori->nama_kategori </b>!"
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responjudulse
     */
    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('backend.kategori.show', compact('kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('backend.kategori.edit', compact('kategori'));

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
        $kategori = kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug ($request->nama_kategori, '_');
        $kategori->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                . $kategori->nama_kategori . "</b>!"
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrfail($id);
        if(!kategori::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                . $kategori->kategori."</b>"
        ]);
        return redirect()->route('kategori.index');
    }
}
