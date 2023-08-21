@extends('layouts.app')

@section('content')
    {{$todo->title}}
    <br>
    {{$todo->description}}
@endsection
