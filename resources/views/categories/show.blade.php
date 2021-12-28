@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Детали категории
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Название категории:</strong> {{ $category->namecategory }}</li>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('categories.edit', $category) }}">
      Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">
      Отмена
      </a>
  </div>
</div>

@endsection
