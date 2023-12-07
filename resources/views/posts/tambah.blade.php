@extends('layout.main')

@section('container')

<p></p>
<form action="/posts/store" method="POST" class="row g-3" enctype="multipart/form-data">
  @csrf
<div class="row g-3">
    <div class="col">
        <label for="inputAddress" class="form-label">NIP</label>
      <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nip" required>
    </div>
    <div class="col">
        <label for="inputAddress" class="form-label">Nama</label>
      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="nama" required>
    </div>
  </div>

    
    <div class="col-12">
      <label for="inputAddress" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="jabatan" required>
    </div>
    
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
@endsection