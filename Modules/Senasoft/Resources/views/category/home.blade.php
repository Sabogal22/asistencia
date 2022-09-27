@extends('layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('senasoft.name') !!}
    </p>
    <div>
        <a href="{{route('senasoft.developers')}}">Desarrolladores</a>
    </div>
    <div>
        <a href="{{route('senasoft.category.index')}}">Categoria</a>
    </div>
    <div>
        {{$categories}}
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</tr>
                    <th>Descripcion</tr>
                    <th><a href="#">Agregar</a></tr>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $c)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->description}}</td>
                    <td></td>
                </tr>
                @endforeach
        </table>

    </div>
@endsection