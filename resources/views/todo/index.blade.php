@extends('layouts.app')

@section('content')
<table>
    <thead>
    <tr>
        <td>Название</td>
        <td>Описание</td>
    </tr>
    </thead>
    <tbody>
    @foreach($todos as $todo)
        <tr>
            <td>{{$todo->title}}</td>
            <td>{{$todo->description}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="/todo/create">Добавить задачу</a>
@endsection
