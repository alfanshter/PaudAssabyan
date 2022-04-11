<?php

namespace App\Http\Controllers;

use App\Models\JadwalKegiatan;
use Illuminate\Http\Request;

class JadwalkegiatanController extends Controller
{

   
    public function index()
    {
        $data = JadwalKegiatan::all();
        return view('jadwalkegiatan.jadwalkegiatan',['jadwalkegiatan'=>$data]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal' => ['required'],
            'kegiatan' => ['required']
        ]);


        
        JadwalKegiatan::create($validatedData);
        return redirect('/jadwalkegiatan')->with('success','Berhasil tambah kegiatansiswa');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'jadwal' => ['required'],
            'kegiatan' => ['required'],
            'id' => ['required']
        ]);


        JadwalKegiatan::where('id',$request->id)->update($validatedData);
        return redirect('/jadwalkegiatan')->with('success','Berhasil update kegiatansiswa');
    }

    public function destroy(Request $request)
    {
        JadwalKegiatan::where('id',$request->id)->delete();
        return redirect('/jadwalkegiatan')->with('success','Berhasil dihapus');

    }
}