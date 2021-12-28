@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить инструмент
  </h3>
  <div class="card-body">
    <form action="{{ route('musics.store') }}" method="post">
      @csrf

      @include('musics.partials.form')
    </form>
  </div>
</div>

@endsection
