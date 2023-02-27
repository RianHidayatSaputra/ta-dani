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
                            <th scope="col">Nama Petugas</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($petugas as $data)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$data->nama_petugas}}</td>
                                <td>{{$data->email}}</td>
                                <td><img src="{{'storage/'.$data->foto}}" alt="PP" class="img-fluid w-25"/></td>
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