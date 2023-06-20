@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        @component('components.success', [
            'message' => session('status'),
        ])
        @endcomponent
    @endif
    <div class="card">
        <h3 class="card-header">
          Список музыкальных инструментов
            <a class="btn btn-sm btn btn-success float-end" href="{{ route('musics.create') }}">
                <i class="bi bi-plus-square"></i> Добавить
            </a>
        </h3>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Категория</th>
                      <th scope="col">Название</th>
                      <th scope="col">Страна производитель</th>
                      <th scope="col" class="text-end">Действия</th>
                    </tr>
                </thead>
                <tbody>   
                    @forelse($musics as $music)
                    <tr>
                      <td>{{ $music->category->namecategory }}</td>
                      <td>{{ $music->name }}</td>
                      <td>{{ $music->countryoforigin }}</td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-secondary d-inline-block me-1 text-light"
                        href="{{ route('musics.show', $music) }}">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-primary d-inline-block me-1 text-light"
                        href="{{ route('musics.edit', $music) }}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('musics.destroy', $music) }}" method="post" class="float-end">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger" type="submit"><i class="bi bi-trash"></i></a>
                        </form>
                    </td>
                    @csrf
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">
                            <h3 class="text-center">Музыкальные инструменты отсутствуют</h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>    
    </div>
</div>
@endsection