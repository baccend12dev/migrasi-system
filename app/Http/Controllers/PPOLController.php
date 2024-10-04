<?php

namespace App\Http\Controllers;

use App\Ppol;
use Illuminate\Http\Request;

class PPOLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppols = Ppol::all();
        return view('pembelian.index', compact('ppols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NO_PO' => 'required|max:11',
            'TGL_PO' => 'required|date',
            'NO_SP' => 'required|size:7',
            'TGL_SP' => 'required|date',
            'NM_BHN' => 'required|max:45',
            'STN' => 'required|max:3',
            'PESAN' => 'required|numeric',
            'SATUAN' => 'required|numeric',
            'H_UNIT' => 'required|numeric',
            'SISA' => 'required|numeric',
            'KODE_P' => 'required|size:3',
            'BG' => 'required|size:1',
            'KET' => 'nullable|max:254',
            'NO_SPH' => 'required|max:20',
        ]);

        // Simpan data ke database
        Ppol::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('ppol.create')->with('success', 'Data PO berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PPOL  $pPOL
     * @return \Illuminate\Http\Response
     */
    public function show(PPOL $pPOL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PPOL  $pPOL
     * @return \Illuminate\Http\Response
     */
    public function edit(PPOL $pPOL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PPOL  $pPOL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PPOL $pPOL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PPOL  $pPOL
     * @return \Illuminate\Http\Response
     */
    public function destroy(PPOL $pPOL)
    {
        //
    }
}
