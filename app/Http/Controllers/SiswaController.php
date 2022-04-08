<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.siswa');
    }

    public function tambahsiswa()
    {
        $data = User::where('role',1)->get();
        return view('siswa.tambahsiswa',['siswa'=>$data]);
    }

    public function delete(Request $request)
    {
        $delete = User::where('id',$request->id)->delete();
        Storage::delete($request->foto);
        return redirect('/tambahsiswa')->with('success','Berhasil di hapus');
    }

    public function gantipassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|max:255',
            'fotoulang' => 'image|file|max:1024',
            'password_ulang' => 'required',
            'id' => 'required'

        ]);

        $updatedata=[];
        if ($request->password == $request->password_ulang) {
            if ($request->file('fotoulang')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $updatedata['password'] = Hash::make($validatedData['password']);
                $updatedata['fotoulang'] = $request->file('fotoulang')->store('foto-siswa');
            }

            
            User::where('id',$request->id)
                ->update($updatedata);
            
                return redirect('/tambahsiswa')->with('success', 'Siswa berhasil di update');     
        }else{
            return redirect('/tambahsiswa')->with('error','Password tidak sama');
            
        }



    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required','min:3','max:255','unique:users'],
            'password' => ['required','min:5'],
            'password_ulang' => ['required','min:5'],
            'foto' => 'image|file|max:1024'
        ]);


        if ($request->password == $request->password_ulang) {
            if ($request->file('foto')) {
                $validatedData['foto'] = $request->file('foto')->store('foto-siswa');
            }
    
    
            $validatedData['password'] = Hash::make($validatedData['password']);
            $validatedData['role'] = 1;
            User::create($validatedData);
            return redirect('/tambahsiswa')->with('success','Berhasil tambah siswa');


        }else{
            return redirect('/tambahsiswa')->with('error','Password tidak sama');
            
        }


    }
}