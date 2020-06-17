@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/jurusans/'.$jurusan->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="form-group">
              <label for="">Nama Jurusan</label>
              <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" value="{{old('nama_jurusan') ?? $jurusan->nama_jurusan}}">
              @error('nama_jurusan')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Nama Dekan</label>
              <input type="text" class="form-control" name="nama_dekan" id="nama_dekan" value="{{old('nama_dekan') ?? $jurusan->nama_dekan}}">
              @error('nama_dekan')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Jumlah Mahasiswa</label>
              <input type="text" class="form-control" name="jumlah_mahasiswa" id="jumlah_mahasiswa" value="{{old('jumlah_mahasiswa') ?? $jurusan->jumlah_mahasiswa}}">
              @error('jumlah_mahasiswa')
                <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
