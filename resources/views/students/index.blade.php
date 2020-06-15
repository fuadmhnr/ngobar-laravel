@extends('layouts.main')

@section('title', 'Students List')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Students List</h1>

      <a href="/students/create" class="btn btn-primary my-3">Add New Student</a>

      @if(session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
          <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection