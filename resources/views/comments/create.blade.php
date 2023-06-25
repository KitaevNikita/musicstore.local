@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h3 class="card-header">
          Добавить отзыв
        </h3>
        <div class="card-body">
            <form action="{{ route('comments.store') }}" method="post">
                @csrf

                @include('comments.partials.form')
            </form>
        </div>
    </div>
</div>

@endsection
