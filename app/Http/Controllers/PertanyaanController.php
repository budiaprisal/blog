<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
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

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi"  => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil di simpan!');
    }

    public function show($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($pertanyaan_id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);
        return redirect('/pertanyaan')->with('success', 'pertanyaan berhasil update!');
    }

    public function destroy($pertanyaan_id)
    {
        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhail di delete!');
    }
}
