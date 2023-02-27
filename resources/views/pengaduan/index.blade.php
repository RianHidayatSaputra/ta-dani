@extends('template.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Basic Table</h6>
                <a href="{{url('/petugas/add')}}" class="btn btn-primary">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Pengaduan</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Isi Laporan</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduans as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->tgl_pengaduan}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->telp}}</td>
                                <td>
                                    <a href="{{url('/petugas/edit/'.$data->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{url('/petugas/delete/'.$data->id)}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection