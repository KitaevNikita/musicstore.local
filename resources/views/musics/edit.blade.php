@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Редактировать категорию
  </h3>
  <div class="card-body">
    <form action="{{ route('musics.update', $music) }}" method="post">
      @csrf
      @method('put')

      @include('musics.partials.form')
    </form>
  </div>
</div>

@endsection
