<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();

        return view('dokter', ['dokter' => $dokter]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_dok'      => 'required',
            'nama_dok'    => 'required',
            'jns_dok'    => 'required',
        ]);
    
        $dokter = Dokter::updateOrCreate(['id' => $request->id], [
            'no_dok' => $request->no_dok,
            'nama_dok' => $request->nama_dok,
            'jns_dok' => $request->jns_dok,
        ]);
    
        return response()->json(['code'=>200, 'message'=>'Dokter Created successfully','data' => $dokter], 200);
    }

    public function show($id)
    {
        $dokter = Dokter::find($id);

        return response()->json($dokter);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id)->delete();

        return response()->json(['success'=>'Dokter Deleted successfully']);
    }
}
