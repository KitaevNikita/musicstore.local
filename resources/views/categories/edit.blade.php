@extends('layouts.app')

@section('content')

<div class="card">
  <h3 class="card-header">
    Редактировать категорию
  </h3>
  <div class="card-body">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @component('components.error', [
                'message' => $error,
            ])
            @endcomponent
        @endforeach
    @endif

    <form action="{{ route('categories.update', $category) }}" method="post">
      @csrf
      @method('put')

      @include('categories.partials.form')
    </form>
  </div>
</div>

@endsection
