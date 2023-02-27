<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PengaduanController extends Controller
{
    function index() {
        $data['pengaduans'] = DB::table('pengaduan')->get();

        return view('/pengaduan/index', $data);
    }

    function getAddPengaduan() {
        return view('/pengaduan/tambah');
    }

    function postAddPengaduan(Request $request) {

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => $request->get('tgl_pengaduan'),
            'nik' => $request->get('nik'),
            'isi_laporan' => bcrypt($request->get('isi_laporan')),
            'foto' => $request->get('foto'),
            'status' => 'belum',
        ]);

        return redirect('/pengaduan');
    }

    function getEditPengaduan($id) {
        $data['pengaduan'] = DB::table('pengaduan')->where('id', $id)->first();

        return view('/pengaduan/edit', $data);
    }

    function postEditPengaduan(Request $request) {

        DB::table('pengaduan')->where('id', $request->get('id'))->update([
            'tgl_pengaduan' => $request->get('tgl_pengaduan'),
            'nik' => $request->get('nik'),
            'isi_laporan' => bcrypt($request->get('isi_laporan')),
            'status' => 'sudah',
        ]);

        return redirect('/pengaduan');
    }

    function deletePengaduan($id) {
        DB::table('pengaduan')->where('id', $id)->delete();

        return redirect('/pengaduan');
    }
}
