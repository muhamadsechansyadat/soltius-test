<?php

namespace App\Http\Controllers\mst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\mst\Tipe;
use App\Models\mst\Merk;

class TipeController extends Controller
{
    public function index()
    {
        $data = Tipe::where('active', 1)->with(['merk'])->get();
        return view('mst.tipe.index', compact('data'));
    }

    public function create()
    {
        $data = Merk::where('active', 1)->select(['id', 'nama'])->get();
        return view('mst.tipe.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk_id' => 'required|numeric',
            'nama' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = Tipe::create([
            'merk_id' => $request->merk_id,
            'nama' => $request->nama,
            'active' => $request->active
        ]);

        return redirect()->route('tipe.index')->with('success', 'Success Add Tipe');
    }

    public function edit($id)
    {
        $dataOption = Merk::select(['id', 'nama'])->get();
        $data = Tipe::where('id', $id)->with(['merk'])->first();
        return view('mst.tipe.edit', compact('data', 'dataOption'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk_id' => 'required|numeric',
            'nama' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = Tipe::where('id', $id)->update([
            'merk_id' => $request->merk_id,
            'nama' => $request->nama,
            'active' => $request->active
        ]);

        return redirect()->route('tipe.index')->with('success', 'Success Update Tipe');
    }

    public function delete($id)
    {
        $data = Tipe::find($id)->update([
            'active' => 0
        ]);
        return redirect()->route('merk.index')->with('success', 'Success Delete Merk');
    }
}
