@extends('layouts.main')

@section('title', 'Edit Students')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Edit Students Data Form</h1>

      <form method="POST" action="/students/{{ $student->id }}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Insert your name" name="nama" value="{{ $student->nama }}">
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Insert your NIM" name="nim" value="{{ $student->nim }}">
          @error('nim')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="Insert your email" name="email" value="{{ $student->email }}">
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Insert your jurusan" name="jurusan" value="{{ $student->jurusan }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
    </div>
  </div>
</div>
@endsection