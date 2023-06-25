@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h3 class="card-header">
          Редактировать отзыв
        </h3>
        <div class="card-body">
            <form action="{{ route('comments.update', $com) }}" method="post">
                @csrf
                @method('put')

                @include('comments.partials.form')
            </form>
        </div>
    </div>
</div>
@endsection
