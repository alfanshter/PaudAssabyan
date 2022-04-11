<?php

namespace App\Http\Controllers;

use App\Models\BiodataSiswa;
use App\Http\Requests\StoreBiodataSiswaRequest;
use App\Http\Requests\UpdateBiodataSiswaRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = BiodataSiswa::with('biodata')->get();    
        $user = User::where('role',1)->get();
        return view('biodata.biodata',['biodata'=>$biodata,'user'=> $user]);
    }

    public function edit($id)
    {
        $biodata = BiodataSiswa::where('user_id',$id)->with('biodata')->first();
        return view('biodata.editbiodata',['biodata'=>$biodata]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'id' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kelas' => 'required',
            'alat_transportasi' => 'required',
            'no_hp' => 'required',
            'nis' => 'required',
            'nomor_kps' => 'required',
            'jenis_tinggal' => 'required',
            'tanggal_masuk' => 'required'

        ]);
        
        if ($request->nama) {
            //update nama
            User::where('id',$request->user_id)->update([
                'nama'=> $request->nama
            ]);
        }

        
        if ($request->file('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-siswa');
        }

        BiodataSiswa::where('id',$request->id)
        ->update($validatedData);
    
        return redirect('/biodata')->with('success', 'Biodata berhasil di update');



    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|unique:biodata_siswas',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kelas' => 'required',
            'alat_transportasi' => 'required',
            'no_hp' => 'required',
            'nis' => 'required|unique:biodata_siswas',
            'nomor_kps' => 'required',
            'jenis_tinggal' => 'required',
            'tanggal_masuk' => 'required',
            'foto' => 'image|file|max:1024'

        ]);

        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-siswa');
        }
        BiodataSiswa::create($validatedData);

        return redirect('/biodata')->with('success','Biodata berhasil di input');


    }

    public function delete(Request $request)
    {
        $delete = BiodataSiswa::where('id',$request->id)->delete();
        Storage::delete($request->foto);
        return redirect('/biodata')->with('success','Berhasil di hapus');
    }

}