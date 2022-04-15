<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use App\Http\Requests\StoreVisiMisiRequest;
use App\Http\Requests\UpdateVisiMisiRequest;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = VisiMisi::first();
        return view('visimisi.visimisi',['visi'=>$data]);   
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);
        
        $cekdata = VisiMisi::first();
        if ($cekdata) {
            VisiMisi::where('id',1)->update($validatedData);

            return redirect('/visimisi')->with('success', 'visi misi berhasil di update');     
        }

        VisiMisi::create($validatedData);
        return redirect('/visimisi')->with('success', 'visi misi berhasil di tambah');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function show(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function edit(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVisiMisiRequest  $request
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVisiMisiRequest $request, VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisiMisi $visiMisi)
    {
        //
    }
}