@extends('template.main')
@section('content')
    <form action="{{url('/petugas/store')}}" method="post" class="form-control pt-3" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" required>
          </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
          </div>
        <div class="mb-3">
            <label for="telp" class="form-label">Telp.</label>
            <input type="text" class="form-control" name="telp" id="telp" required>
          </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection