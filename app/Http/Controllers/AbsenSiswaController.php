<?php

namespace App\Http\Controllers;

use App\Models\AbsenSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class AbsenSiswaController extends Controller
{
    public function index()
    {
        $user = User::where('role',1)->get();
        $absen = AbsenSiswa::with('user')->get();
        return view('absensiswa.absensiswa',['user'=> $user,'absen' => $absen]);

    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'user_id' => 'required',
            'absen' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        AbsenSiswa::create($validatedData);
        return redirect('/absensiswa')->with('success','Berhasil ditambah');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'absen' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        AbsenSiswa::where('id',$request->id)->update($validatedData);
        return redirect('/absensiswa')->with('success','Berhasil diupdate');
    }

    public function delete(Request $request)
    {
        AbsenSiswa::where('id',$request->id)->delete();
        return redirect('/absensiswa')->with('success','Berhasil dihapus');
    }
}