<?php

namespace App\Http\Controllers\mst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\mst\Merk;

class MerkController extends Controller
{
    public function index()
    {
        $data = Merk::where('active', 1)->select(['id', 'nama', 'active'])->get();
        return view('mst.merk.index', compact('data'));
    }

    public function create()
    {
        return view('mst.merk.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = Merk::create([
            'nama' => $request->nama,
            'active' => $request->active
        ]);

        return redirect()->route('merk.index')->with('success', 'Success Add Merk');
    }

    public function edit($id){
        $data = Merk::find($id);
        return view('mst.merk.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = Merk::where('id', $id)->update([
            'nama' => $request->nama,
            'active' => $request->active
        ]);

        return redirect()->route('merk.index')->with('success', 'Success Update Merk');
    }

    public function delete($id){
        $data = Merk::find($id)->update([
            'active' => 0
        ]);
        return redirect()->route('merk.index')->with('success', 'Success Delete Merk');
    }
}
