<?php

namespace App\Http\Controllers\trn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\trn\STNK;
use App\Models\trn\STNKBiaya;

class STNKBiayaController extends Controller
{
    public function index($id)
    {
        $data = STNKBiaya::where('no_polisi', $id)->where('active', 1)->with('stnk')->get();
        $id = $id;
        return view('trn.stnk-biaya.index', compact('data', 'id'));
    }

    public function create($id)
    {
        $id = $id;
        return view('trn.stnk-biaya.create', compact('id'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'biaya' => 'required',
            'denda' => 'required|numeric',
            'active' => 'required|numeric',
        ]);

        $data = STNKBiaya::create([
            'no_polisi' => $id,
            'nama' => $request->nama,
            'biaya' => $request->biaya,
            'denda' => $request->denda,
            'total' => ($request->denda + $request->biaya),
            'active' => $request->active,
        ]);

        return redirect()->route('stnk-biaya.index', $id)->with('success', 'Success Update STNK Biaya');
    }

    public function edit($id, $newId)
    {
        $data = STNKBiaya::where('no_polisi', $id)
            ->where('id', $newId)
            ->first();
        $id = $id;
        return view('trn.stnk-biaya.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id, $newId)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'biaya' => 'required',
            'denda' => 'required|numeric',
            'active' => 'required|numeric',
        ]);

        $data = STNKBiaya::where('no_polisi', $id)->where('id', $newId)->update([
            'no_polisi' => $id,
            'nama' => $request->nama,
            'biaya' => $request->biaya,
            'denda' => $request->denda,
            'total' => ($request->denda + $request->biaya),
            'active' => $request->active,
        ]);

        return redirect()->route('stnk-biaya.index', $id)->with('success', 'Success Update STNK Biaya');
    }

    public function delete($id, $newId)
    {
        $data = STNKBiaya::where('no_polisi', $id)
            ->where('id', $newId)
            ->update([
                'active' => 0
            ]);
        $id = $id;
        return back()->with('success', 'Success Delete STNK');
    }
}
