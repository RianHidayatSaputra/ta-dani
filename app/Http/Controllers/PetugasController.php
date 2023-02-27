<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
{
    function index() {
        $data['petugas'] = DB::table('petugas')->get();

        return view('/petugas/index', $data);
    }

    function getAddPetugas() {
        return view('/petugas/tambah');
    }

    function postAddPetugas(Request $request) {
        $photo = $request->file('foto')->store('img-petugas');

        DB::table('petugas')->insert([
            'nama_petugas' => $request->get('nama_petugas'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'telp' => $request->get('telp'),
            'foto' => $photo,
        ]);

        return redirect('/petugas');
    }

    function getEditPetugas($id) {
        $data['petugas'] = DB::table('petugas')->where('id', $id)->first();

        return view('/petugas/edit', $data);
    }

    function postEditPetugas(Request $request) {
        $photo;
        
        if ($request->file('foto') == null) {
            $photo = request()->oldImage;
        }else {
            Storage::delete(request()->oldImage);
            $photo = $request->file('foto')->store('img-petugas');
        }

        DB::table('petugas')->where('id', $request->get('id'))->update([
            'nama_petugas' => $request->get('nama_petugas'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'telp' => $request->get('telp'),
            'foto' => $photo,
        ]);

        return redirect('/petugas');
    }

    function deletePetugas($id) {
        $petugas = DB::table('petugas')->where('id', $id)->first();

        if ($petugas->foto) {
            Storage::delete($petugas->foto);
        }
        DB::table('petugas')->where('id', $id)->delete();

        return redirect('/petugas');
    }

}
