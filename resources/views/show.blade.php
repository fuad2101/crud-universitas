@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-end align-items-center">
            <h3 class="mr-auto">Data Jurusan</h3>
                    <form action="{{url('/jurusans/'.$jurusan->id.'/edit')}}" method="get">
                        <button class="btn btn-primary mr-2" type="submit">Edit</button>
                    </form>
                    <form action="{{url('/jurusans/'.$jurusan->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
                <ul>
                    <li>{{$jurusan->nama_jurusan}}</li>
                    <li>{{$jurusan->nama_dekan}}</li>
                    <li>{{$jurusan->jumlah_mahasiswa}}</li>
                </ul>
            </div>



</div>

@endsection
