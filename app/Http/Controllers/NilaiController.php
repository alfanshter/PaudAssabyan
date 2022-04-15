<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index(Request $request)
    {
        $siswa = BiodataSiswa::all();
        $nilai = Nilai::all();
        return view('nilai.nilai',['siswa'=>$siswa,'nilai'=>$nilai]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'biodata_siswa_id' => 'required',
            'bermain' => 'required',
            'ikrar_bersama' => 'required',
            'senam_irama' => 'required',
            'bernyanyi' => 'required',
            'berdoa' => 'required',
            'pijakan_sebelum_bermain' => 'required',
            'pijakan_setelah_bermain' => 'required',
            'tanggal' => 'required',
            'komentar' => 'required'
        ]);

        Nilai::create($validatedData);
        return redirect('/nilaisiswa')->with('success','Berhasil tambah nilai');
    }

    public function delete($id)
    {
        $hapus = Nilai::where('id',$id)->delete();
        return redirect('/nilaisiswa')->with('success','Berhasil hapus nilai');

    }

   
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'id' => 'required',
            'biodata_siswa_id' => 'required',
            'bermain' => 'required',
            'ikrar_bersama' => 'required',
            'senam_irama' => 'required',
            'bernyanyi' => 'required',
            'berdoa' => 'required',
            'pijakan_sebelum_bermain' => 'required',
            'pijakan_setelah_bermain' => 'required',
            'komentar' => 'required'
        ]);

        Nilai::where('id',$request->id)
            ->update($validatedData);
        
        return redirect('/nilaisiswa')->with('success','Kegiatan berhasil di edit');
    }

    
}