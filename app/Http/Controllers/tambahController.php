<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\guru;

class tambahController extends Controller
{
    public function index() {
        return view('pages.data.master.siswa.form');
    }
    public function siswa(Request $request)
    { 
        // dd($request->all());
        siswa::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit_siswa($id) {
        $data = siswa::find($id);
        return view('pages.data.master.siswa.edit', compact('data'));
    }
    public function upsiswas(Request $request, $id) {
        $data = siswa::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Edit');
    }
    public function delete_siswa($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Hapus');
    }

    // guru
    public function indexg() {
        return view('pages.data.master.guru.form');
    }
    public function guru(Request $request)
    { 
        // dd($request->all());
        guru::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function edit_guru($id) {
        $data = guru::find($id);
        return view('pages.data.master.guru.edit', compact('data'));
    }
    public function upgurus(Request $request, $id) {
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Edit');
    }
    public function delete_guru($id)
    {
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('dashboard')->with('success', 'Data Berhasil Di Hapus');
    }
}