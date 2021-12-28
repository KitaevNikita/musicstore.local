@extends('layouts.app')

@section('content')


<div class="card">
  <h3 class="card-header">
    Детали категории
  </h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Название категории:</strong> {{ $category->namecategory }}</li>
  <div class="card-body">
    <table class="table table-sm border">
      <thead class="thead-secondary">
        <tr>
          <th scope="col">Название инструмента</th>
        </tr>
      </thead>
      <tbody>
        @forelse($category->musicstores as $musicstore)
        <tr>
            <td>
            {{ $musicstore->name }}
            </td>
        </tr>
        @empty
        @endforelse
      </tbody>
    </table>
    <a class="btn btn-danger" href="{{ route('categories.index') }}">
      Вернуться
      </a>
  </div>
</div>

@endsection
