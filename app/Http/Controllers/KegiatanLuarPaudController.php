<?php

namespace App\Http\Controllers;

use App\Models\KegiatanLuarPaud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanLuarPaudController extends Controller
{
    public function index()
    {
        $kegiatan = KegiatanLuarPaud::all();
        return view('kegiatanluarpaud.kegiatanluarpaud',['kegiatan'=>$kegiatan]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'cerita_kegiatan' => 'required',
            'foto_kegiatan' => 'image|file|max:1024'

        ]); 

        if ($request->file('foto_kegiatan')) {
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('foto-kegiatan-luar-paud');
        }

        KegiatanLuarPaud::create($validatedData);

        return redirect('/kegiatanluarpaud')->with('success','Kegiatan berhasil di input');

    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'nama_kegiatan' => 'required',
            'cerita_kegiatan' => 'required',
            'foto_kegiatan' => 'image|file|max:1024'

        ]); 


        if ($request->file('foto_kegiatan')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('foto-kegiatan-luar-paud');
        }

        KegiatanLuarPaud::where('id',$request->id)
            ->update($validatedData);
        
        return redirect('/kegiatanluarpaud')->with('success','Kegiatan berhasil di input');
    }

    public function delete(Request $request)
    {
        $delete = KegiatanLuarPaud::where('id',$request->id)->delete();
        Storage::delete($request->foto_kegiatan);
        return redirect('/kegiatanluarpaud')->with('success','Berhasil di hapus');
    }
}