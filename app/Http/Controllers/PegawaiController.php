<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()

    {
        $pegawai = PegawaiModel::all();
        return view('pegawai.index', compact(['pegawai']));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        PegawaiModel::create($request->all());
        return redirect('/data');
    }
    public function edit($id)
    {
        $edit = PegawaiModel::find($id);
        return view('pegawai.edit', compact(['edit']));
    }
    public function update($id, Request $request)

    {
        $edit = PegawaiModel::find($id);
        $edit->update($request->all());
        // dd($edit);
        return redirect('/data');
    }
    public function destroy($id)
    {
        $edit = PegawaiModel::find($id);
        $edit->delete();

        return redirect('/data');
    }
}
