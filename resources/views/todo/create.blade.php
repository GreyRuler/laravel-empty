@extends('layouts.app')

@section('content')
    <form action="/todo" method="post">
        @csrf
        <label for="title">Введите название задачи</label>
        <input type="text" name="title" id="title">
        <label for="description">Введите описание задачи</label>
        <input type="text" name="description" id="description">
        <button type="submit">Добавить</button>
    </form>
@endsection
