@extends('senasoft::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('senasoft.name') !!}
    </p>
    <div>
        <a href="{{route('senasoft.developers')}}">Desarrolladores</a>
    </div>
    <div>
        <a href="{{route('senasoft.category.index')}}">Categorias</a>
    </div>
@endsection
