<?php

namespace App\Http\Controllers;

use App\perlpbbm;
use Illuminate\Http\Request;

class PerlpbbmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perlpbbms = Perlpbbm::all();
        return view('perlpbbms.index', compact('perlpbbms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('perlpbbms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
        DB::table('perlpbbm')->insert([
            'NO_LPB' => 'required|string',
            'TGL_LPB' => 'required|date',
            'NO_LPB2' => 'nullable|string',
            'TGL_LPB2' => 'nullable|date',
            'NM_BHN' => 'nullable|string',
            'STN' => 'nullable|string',
            'UNITB' => 'nullable|numeric',
            'HSATUAN' => 'nullable|numeric',
            'TOTAL' => 'nullable|numeric',
            'KP' => 'nullable|string',
            'NO_PO' => 'nullable|string',
            'TGL_PO' => 'nullable|date',
            'KET_VAL' => 'nullable|string',
            'IMP' => 'nullable|string',
            'KET' => 'nullable|string'
        ]);

        $validated['TOTAL'] = $validated['UNITB'] * $validated['HSATUAN'];

        // Perlpbbm::create([
        //     'UNITB' => $validatedData['UNITB'],
        //     'HSATUAN' => $validatedData['HSATUAN'],
        //     'TOTAL' =>   $validated['TOTAL'],
        // ]);
        // Perlpbbm::create($request->all());
        // Perlpbbm::create($validated);

        return redirect()->route('perlpbbms.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\perlpbbm  $perlpbbm
     * @return \Illuminate\Http\Response
     */
    public function show(perlpbbm $perlpbbm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perlpbbm  $perlpbbm
     * @return \Illuminate\Http\Response
     */
    public function edit(perlpbbm $perlpbbm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perlpbbm  $perlpbbm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perlpbbm $perlpbbm)
    {
        $request->validate([
            'NO_LPB' => 'required|string|max:11',
            'TGL_LPB' => 'nullable|date',
            'NO_LPB2' => 'nullable|string|max:11',
            'TGL_LPB2' => 'nullable|date',
            'NM_BHN' => 'nullable|string|max:45',
            'STN' => 'nullable|string|max:3',
            'UNITB' => 'nullable|numeric',
            'HSATUAN' => 'nullable|numeric',
            'TOTAL' => 'nullable|numeric',
            'KP' => 'nullable|string|max:13',
            'NO_PO' => 'nullable|string|max:11',
            'TGL_PO' => 'nullable|date',
            'KET_VAL' => 'nullable|string|max:45',
            'IMP' => 'nullable|string|max:1',
            'KET' => 'nullable|string|max:45',
        ]);

        $perlpbbm = Perlpbbm::findOrFail($id);
        $perlpbbm->update($request->all());

        return response()->json($perlpbbm);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perlpbbm  $perlpbbm
     * @return \Illuminate\Http\Response
     */
    public function destroy(perlpbbm $perlpbbm)
    {
        $perlpbbm = Perlpbbm::findOrFail($id);
        $perlpbbm->delete();

        return response()->json(null, 204);
    }
}
