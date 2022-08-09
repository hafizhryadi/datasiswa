@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12 col-md-10">
        <h3>details</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{ Route('siswa.index') }}">Go Back </a>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
       No. {!! $siswa->id !!}
    </div>
    <div class="col-12 mb-3">
       Nama: {!! $siswa->nama !!}
    </div>
    <div class="col-12 mb-3">
       NISN: {!! $siswa->nisn !!}
    </div>
    <div class="col-12 mb-3">
       Jenis Kelamin: {!! $siswa->jenis_kelamin !!}
    </div>
    <div class="col-12 mb-3">
       Jurusan: {!! $siswa->jurusan !!}
    </div>
    <div class="col-12 mb-3">
      @foreach ($siswa->ekskul as &e)
         Ekskul: {{ $e->nama }}
      @endforeach
    </div>
    <div class="col-12 mb-3">
       Nama Ayah: {!! $siswa->nama_ayah !!}
    </div>
    <div class="col-12 mb-3">
       Nama Ibu: {!! $siswa->nama_ibu !!}
    </div>
    <div class="col-12 mb-3">
       Alamat: {!! $siswa->alamat !!}
    </div>
    <div class="col-12 mb-3">
       Asal Sekolah: {!! $siswa->asal_sekolah !!}
    </div>
</div>
@endsection
        
        
        
       
       
        
       
       