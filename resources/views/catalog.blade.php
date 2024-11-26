@extends('layout.app')

@section('title', 'catalog')
@section('content')
<div class="container">
    <div class="row row-cols-2 gap-4 justify-content-center">
        @for ($i = 1; $i < 7 ; $i++)
            @include('include.card')
        @endfor

    </div>
</div>
@endsection

