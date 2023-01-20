<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\tahun_rilis;
use Illuminate\Http\Request;
use Validator;

class TahunRilisController extends Controller
{
    public function index()
    {
        $tahun = tahun_rilis::all();
        return view('admin.tahunRilis.index', compact('tahun'));
    }

    public function create()
    {
        return view('admin.tahunRilis.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'tahun' => 'required|unique:tahun_rilis|numeric',
        ];

        $messages = [
            'tahun.required' => 'tahun harus di isi!',
            'tahun.unique' => 'tahun tidak boleh sama!',
            'tahun.numeric' => 'tahun harus berjenis angka!',
        ];

        // validasi
        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        $tahun = new tahun_rilis();
        $tahun->tahun = $request->tahun;
        $tahun->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('tahun_rilis.index');
    }

    public function show($id)
    {
        $tahun = tahun_rilis::findOrFail($id);
        return view('admin.tahunRilis.show', compact('tahun'));
    }

    public function edit($id)
    {
        $tahun = tahun_rilis::findOrFail($id);
        return view('admin.tahunRilis.edit', compact('tahun'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'tahun' => 'required|numeric',
        ];

        $messages = [
            'tahun.required' => 'tahun harus di isi!',
            'tahun.numeric' => 'tahun harus berjenis angka!',
        ];

// validasi
        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        $tahun = tahun_rilis::findOrFail($id);
        $tahun->tahun = $request->tahun;
        $tahun->save();
        Alert::success('Done', 'Data berhasil diedit')->autoClose(2000);
        return redirect()->route('tahun_rilis.index');
    }

    public function destroy($id)
    {
        $tahun = tahun_rilis::findOrFail($id);
        $tahun->delete();
        Alert::success('Done', 'Data berhasil dihapus')->autoClose(2000);
        return redirect()->route('tahun_rilis.index');

    }
}