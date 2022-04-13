<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru.guru',['guru' => $guru]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_guru' => 'required',
            'nama_lembaga' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required',
            'tmt' => 'required',
            'tahun_kerja' => 'required',
            'bulan_kerja' => 'required',
            'status_guru' => 'required',
            'alamat_lembaga' => 'required',
            'alamat_rumah' => 'required',
            'pendidikan_guru' => 'required',
            'foto' => 'image|file|max:1024'

        ]); 
        
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-guru');
        }

        Guru::create($validatedData);

        return redirect('/guru')->with('success','Guru berhasil di input');

    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'nama_guru' => 'required',
            'nama_lembaga' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => 'required',
            'tmt' => 'required',
            'tahun_kerja' => 'required',
            'bulan_kerja' => 'required',
            'status_guru' => 'required',
            'alamat_lembaga' => 'required',
            'alamat_rumah' => 'required',
            'pendidikan_guru' => 'required',
            'foto' => 'image|file|max:1024'

        ]);  


        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-kegiatan-luar-paud');
        }

        Guru::where('id',$request->id)
            ->update($validatedData);
        
        return redirect('/guru')->with('success','Guru berhasil di update');
    }

    public function delete(Request $request)
    {
        $delete = Guru::where('id',$request->id)->delete();
        Storage::delete($request->foto);
        return redirect('/guru')->with('success','Berhasil di hapus');
    }

}