@extends('layouts.app')

@section('content')
@if (session()->has('pesan'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
      </button>
      <strong>{{session()->get('pesan')}}</strong>
  </div>
@endif

    <div class="container">
        <h3>Tabel Mahasiswa</h3>
    <table class="table table-striped table-inverse ">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th>
                <th>Nama Jurusan</th>
                <th>Nama Dekan</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($jurusans as $jurusan)
                <tr>
                    <td><a href="{{url('/jurusans/'.$jurusan->id)}}">{{$jurusan->id}}</a>  </td>
                    <td>{{$jurusan->nama_jurusan}}</td>
                    <td>{{$jurusan->nama_dekan}}</td>
                    <td>{{$jurusan->jumlah_mahasiswa}}</td>
                </tr>
                @empty
                   <tr>
                    <td class="text-center" colspan="4">Tidak Ada Data</td>
                    </tr>
                @endforelse
            </tbody>
    </table>
</div>

@endsection
