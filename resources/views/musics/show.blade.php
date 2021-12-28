@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Детали музыкальных инструментов
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Название категории:</strong> {{ $music->category->namecategory }}</li>
    <li class="list-group-item"><strong>Название музыкального инструмента:</strong> {{ $music->name }}</li>
    <li class="list-group-item"><strong>Страна производитель:</strong> {{ $music->countryoforigin }}</li>
    <li class="list-group-item"><strong>Фирма производитель:</strong> {{ $music->manufacturercompany }}</li>
    <li class="list-group-item"><strong>Цвет:</strong> {{ $music->colour }}</li>
    <li class="list-group-item"><strong>Цега:</strong> {{ $music->price }}</li>
  <div class="card-body">
      <a class="btn btn-secondary" href="{{ route('musics.edit', $music) }}">
      Редактировать
      </a>
      <a class="btn btn-danger" href="{{ route('musics.index') }}">
      Отмена
      </a>
  </div>
</div>

@endsection
