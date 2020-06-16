@extends('layouts.main')

@section('title', 'Students Detail')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Students Details</h1>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $student->nama }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
          <p class="card-text">{{ $student->email }}</p>
          <p class="card-text">{{ $student->jurusan }}</p>

          <button type="submit" class="btn btn-primary">Edit</button>
          <form action="{{ $student->id }}" method="POST" class="display d-inline" onclick="return confirm('Yakin ingin menghapus data {{ $student->nama }} ?')">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/students" class="card-link">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection