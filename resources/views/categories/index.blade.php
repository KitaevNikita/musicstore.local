@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header bg-secondary text-white">
    Список категорий
    <a class="btn btn-sm btn-primary float-end" href="{{ route('categories.create') }}">
      Добавить категорию
    </a>
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </a>
  </div>
  <table class="table table-sm border">
      <thead class="thead-secondary">
        <tr>
          <th scope="col">Название категории</th>
          <th scope="col" class="text-end">Действия</th>
        </tr>
      </thead>
      <tbody>
      @forelse($categories as $category)
        <tr>
            <td>{{ $category->namecategory }}</td>
          <td class="text-end">
            <a class="btn btn-sm btn-secondary" href="{{ route('categories.show', $category) }}">Просмотреть</a>
          </td>
          @csrf
        </tr>
        @empty
        <tr>
          <td colspan="3">
            <h3 class="text-center">Текущие категории отсутствуют</h3>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>

@endsection