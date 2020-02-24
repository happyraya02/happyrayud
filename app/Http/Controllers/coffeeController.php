<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coffee;
use App\kategori;
use File;
use Session;
use Auth;

class coffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coffee = coffee::with('kategori')->get();
        return view('backend.coffee.index', compact('coffee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coffee = coffee::all();
        $kategori = kategori::all();
        // dd($kategori);
        return view('backend.coffee.create', compact('coffee','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coffee = new coffee();
        $coffee->nama_kopi = $request->nama_kopi;
        $coffee->id_kategori = $request->id_kategori;
        $coffee->manfaat = $request->manfaat;
        $coffee->harga = $request->harga;


        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $Path = public_path() . '/assets/img/coffee/';
            $filename = '_' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $coffee->gambar = $filename;
        }

        $coffee->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                . $coffee->judul . "</b>"
        ]);
        return redirect()->route('coffee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coffee = coffee::findOrFail($id);
        return view('backend.coffee.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coffee = coffee::findOrFail($id);
        return view('backend.coffee.edit', compact('coffee'));
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
        $coffee = coffee::findOrFail($id);
        $coffee->nama_kopi = $request->nama_kopi;
        $coffee->id_kategori = $request->id_kategori;
        $coffee->manfaat = $request->manfaat;
        $coffee->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() . '/assets/img/coffee/';
            $filename = '_' . '/assets/img/coffee/';
            $upload = $file->move($destinationPath, $filename);
        }

        if ($coffee->gambar) {
            $old_gambar = $coffee->gambar;
            $filepath = public_path() . '/assets/img/' . $coffee->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }

            $coffee->save();
            Session::flash("flash_notification", [
                "level" => "primary",
                "message" => "Berhasil mengubah data coffee berjudul <b>$coffee->judul</b>!"
            ]);
            return redirect()->route('coffee.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coffee = coffee::findOrFail($id);
        if ($coffee->gambar) {
            $old_gambar = $coffee->gambar;
            $filepath = public_path() . '/assets/img/coffee/' . $coffee->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $coffee->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus data coffee berjudul <b>$coffee->judul</b>!"
        ]);
        return redirect()->route('coffee.index');
    }
}
