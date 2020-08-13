<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        // $pertanyaan = DB::table('pertanyaan')->get();
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        // $query = DB::table('pertanyaan')->insert([
        //     "judul" => $request["judul"],
        //     "isi"  => $request["isi"]
        // ]);

        // $pertanyaan = new Pertanyaan;
        // $pertanyaan->judul = $request['judul'];
        // $pertanyaan->isi = $request['isi'];
        // $pertanyaan->save();

        $pertanyaan = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi"  => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil di simpan!');
    }

    public function show($id)
    {
        // $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();

        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id)
    {
        //$pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();

        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request)
    {
        // $request->validate([
        //     'judul' => 'required|unique:pertanyaan',
        //     'isi' => 'required'
        // ]);

        // $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->update([
        //     'judul' => $request['judul'],
        //     'isi' => $request['isi']
        //]);

        $update = Pertanyaan::where('id', $id)->update([
            "judul" => $request["judul"],
            "isi"   => $request["isi"]
        ]);
        return redirect('/pertanyaan')->with('success', 'pertanyaan berhasil update!');
    }

    public function destroy($id)
    {
        // $query = DB::table('pertanyaan')->where('id', $id)->delete();
        Pertanyaan::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil di delete!');
    }
}
