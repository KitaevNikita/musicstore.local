@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Добавить категорию
  </h3>
  <div class="card-body">
    <form action="{{ route('categories.store') }}" method="post">
      @csrf

      @include('categories.partials.form')
    </form>
  </div>
</div>

@endsection
