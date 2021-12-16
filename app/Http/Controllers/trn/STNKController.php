<?php

namespace App\Http\Controllers\trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trn\STNK;
use App\Models\mst\Merk;
use App\Models\mst\Tipe;
use DB;

class STNKController extends Controller
{
    public function index()
    {
        $data = STNK::where('active', 1)->with(['merk', 'tipe'])->get();
        return view('trn.stnk.index', compact('data'));
    }

    public function create()
    {
        $dataOption1 = Merk::where('active', 1)->select(['id', 'nama'])->get();
        $dataOption2 = Tipe::where('active', 1)->select(['id', 'nama'])->get();
        return view('trn.stnk.create', compact('dataOption1', 'dataOption2'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_polisi' => 'required|max:20',
            'nama_pemilik' => 'required|max:255',
            'alamat' => 'required',
            'merk_id' => 'required|numeric',
            'tipe_id' => 'required|numeric',
            'model' => 'required|max:255',
            'warna' => 'required|max:255',
            'no_rangka' => 'required|max:255',
            'no_mesin' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = STNK::create([
            'no_polisi' => strtoupper($request->no_polisi),
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'merk_id' => $request->merk_id,
            'tipe_id' => $request->tipe_id,
            'model' => $request->model,
            'warna' => $request->warna,
            'no_rangka' => $request->no_rangka,
            'no_mesin' => $request->no_mesin,
            'active' => $request->active,
        ]);

        return redirect()->route('stnk.index')->with('success', 'Success Add STNK');
    }

    public function edit($id)
    {
        $data = STNK::where('no_polisi', $id)->first();
        $dataOption1 = Merk::where('active', 1)->select(['id', 'nama'])->get();
        $dataOption2 = Tipe::where('active', 1)->select(['id', 'nama'])->get();
        return view('trn.stnk.edit', compact('data', 'dataOption1', 'dataOption2'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_polisi' => 'required|max:20',
            'nama_pemilik' => 'required|max:255',
            'alamat' => 'required',
            'merk_id' => 'required|numeric',
            'tipe_id' => 'required|numeric',
            'model' => 'required|max:255',
            'warna' => 'required|max:255',
            'no_rangka' => 'required|max:255',
            'no_mesin' => 'required|max:255',
            'active' => 'required|numeric',
        ]);

        $data = STNK::where('no_polisi', $id)->update([
            'nama_pemilik' => $request->nama_pemilik,
            'alamat' => $request->alamat,
            'merk_id' => $request->merk_id,
            'tipe_id' => $request->tipe_id,
            'model' => $request->model,
            'warna' => $request->warna,
            'no_rangka' => $request->no_rangka,
            'no_mesin' => $request->no_mesin,
            'active' => $request->active,
        ]);

        return redirect()->route('stnk.index')->with('success', 'Success Update STNK');
    }

    public function delete($id)
    {
        $data = STNK::find($id)->update([
            'active' => 0
        ]);
        return redirect()->route('stnk.index')->with('success', 'Success Delete STNK');
    }
}
