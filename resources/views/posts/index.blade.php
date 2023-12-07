@extends('layout.main')

@section('container')
@if (session('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<h1>Halaman Posts</h1>
<p>ini halaman posts</p>

{{-- <h3>{{ $name }}</h3> --}}
{{-- <h3>{{  $email; ?></h3>}}  --}}
<a type="button" class="btn btn-primary" href="/tambah">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pegawais as $pegawai)
      <tr>
        <td>{{ $pegawai->id }}</td>
        <td>{{ $pegawai->nip }}</td>
        <td>{{ $pegawai->nama }}</td>
        <td>{{ $pegawai->jabatan }}</td>
        <td>
          <a type="button" class="btn btn-primary" href="/posts/edit/{{ $pegawai ->id }}">Edit</a>
          <a type="button" class="btn btn-primary" href="/posts/delete/{{ $pegawai ->id }}">Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>

    
  </table>

@endsection