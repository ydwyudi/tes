@extends('layout.main')

@section('container')

<p></p>
<form action="/posts/edit/{{ $pegawai->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="row g-3">
    <div class="col">
        <label for="inputAddress" class="form-label">NIP</label>
      <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nip" required value="{{ $pegawai->nip }}">
    </div>
    <div class="col">
        <label for="inputAddress" class="form-label">Nama</label>
      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="nama" required value="{{ $pegawai->nama }}">
    </div>
  </div>

    
    <div class="col-12">
      <label for="inputAddress" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="jabatan" required value="{{ $pegawai->jabatan }}">
    </div>
    
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
@endsection