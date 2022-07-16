@extends('layouts.main')
@section('container')

    <div class="row">
        <div class="col-12 col-md-10">
            <H3 >Data Siswa</H3>
        </div>
        <div class="col-12 col-md-2 text-end">
            <a class="btn btn-primary" href="{{ Route('siswa.create') }}">Tambah data</a>
        </div>
    </div>
    <div class="row">                                                                                                             
        <div class="col-12">
            <table class="table table-danger">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>ekskul</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $s )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->jurusan }}</td>
                        <td>
                            @foreach ($s->ekskul as $e)
                                {{ $e->nama }}
                            @endforeach
                        </td>
                        <td>{{ $s->alamat }}</td>
                        <td>
                        <form action="{{ route('siswa.destroy', $s->id ) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('siswa.show', $s->id) }}">Detail</a>
                            <a class="btn btn-primary" href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection