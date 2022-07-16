@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12 col-md-10">
        <h3>Tambah Data</h3>
    </div>
    <div class="col-12 col-md-2 text-end">
        <a class="btn btn-primary" href="{{ Route('siswa.index') }}">Go Back </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form method="POST" action="{{ ('/siswa') }}">
        @csrf
        @method('POST')
        <form>
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label class="form-label">NISN</label>
                <input type="text" name="nisn" class="form-control" id="" placeholder="NISN">
            </div>
            <select class="form-select" aria-label="Default select example" name="jurusan">
                <option selected>Jurusan</option>
                <option value="TKJ">TKJ</option>
                <option value="AKL">AKL</option>
                <option value="BDP">BDP</option>
            </select><br>
            
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="" placeholder="2xxx-12-31">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control" id="" placeholder="nama ayah">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control" id="" placeholder="nama_ibu">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="" placeholder="alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" id="" placeholder="asal sekolah">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </form>
    </div>
</div>
@endsection