@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Tambah Jurusan</h3>
        <form action="{{route('jurusans.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Nama Jurusan</label>
              <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan">
              @error('nama_jurusan')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Nama Dekan</label>
              <input type="text" class="form-control" name="nama_dekan" id="nama_dekan">
              @error('nama_dekan')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Jumlah Mahasiswa</label>
              <input type="text" class="form-control" name="jumlah_mahasiswa" id="jumlah_mahasiswa">
              @error('jumlah_mahasiswa')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <button class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
