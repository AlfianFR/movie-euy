<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Casting;
use Illuminate\Http\Request;
use Validator;

class CastingController extends Controller
{
    public function index()
    {
        $castings = Casting::orderBy('id', 'desc')->get();
        return view('admin.casting.index', compact('castings'));
    }

    public function create()
    {
        return view('admin.casting.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'foto' => 'required|image|max:4096',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ];

        $messages = [
            'nama.required' => 'Nama harus di isi!',
            'foto.required' => 'foto harus di isi!',
            'foto.image' => 'Foto harus berjenis jpg & png!',
            'foto.image' => 'Foto harus dibawah kapasitas 4096kb!',
            'jenis_kelamin.required' => 'Jenis Kelamin harus di isi!',
            'tanggal_lahir.required' => 'Tanggal Lahir harus di isi!',
        ];

        $validation = Validator::make($request->all(), $rules, $messages);
        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        $casting = new Casting();
        $casting->nama = $request->nama;
        $casting->jenis_kelamin = $request->jenis_kelamin;
        $casting->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/casting/', $name);
            $casting->foto = $name;
        }
        $casting->save();
        Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('casting.index');

    }

    public function show($id)
    {
        $casting = Casting::findOrFail($id);
        return view('admin.casting.show', compact('casting'));

    }

    public function edit($id)
    {
        $casting = Casting::findOrFail($id);
        return view('admin.casting.edit', compact('casting'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'foto' => 'nullable|image',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
        ];

        $messages = [
            'nama.required' => 'Nama harus di isi!',
            'foto.required' => 'foto harus di isi!',
            'foto.image' => 'Foto harus berjenis jpg & png!',
            'jenis_kelamin.required' => 'Jenis Kelamin harus di isi!',
            'tanggal_lahir.required' => 'Tanggal Lahir harus di isi!',
        ];

        $validation = Validator::make($request->all(), $rules, $messages);
        if ($validation->fails()) {
            Alert::error('data yang anda input ada kesalahan', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        $casting = Casting::findOrFail($id);

        $casting->nama = $request->nama;
        $casting->jenis_kelamin = $request->jenis_kelamin;
        $casting->tanggal_lahir = $request->tanggal_lahir;
        if ($request->hasFile('foto')) {
            $casting->deleteImage();
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/casting/', $name);
            $casting->foto = $name;
        }
        $casting->save();
        Alert::success('Done', 'Data berhasil diedit')->autoClose(2000);
        return redirect()->route('casting.index');

    }

    public function destroy($id)
    {
        if(!Casting::destroy($id)) {
            return redirect()->back();
        }
        return redirect()->route('casting.index');

    }
}
