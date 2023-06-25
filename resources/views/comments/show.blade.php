@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card mb-3">
        <h3 class="card-header">
            {{ $com->topic }}
        </h3>
        <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Название инструмента</strong></li>
        </ul>
        <div class="card-body">
            <table class="table table-sm border">
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
                <i class="bi bi-house"></i>  На главную
            </a>
        </div>
    </div>
</div>

@endsection
