@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Редактировать категорию
  </h3>
  <div class="card-body">
    <form action="{{ route('categories.update', $category) }}" method="post">
      @csrf
      @method('put')

      @include('categories.partials.form')
    </form>
  </div>
</div>

@endsection
