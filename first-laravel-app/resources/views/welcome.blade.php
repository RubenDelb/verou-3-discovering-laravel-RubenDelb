@extends('layouts.app')

@section('body')

<h2>Welcome on my first Laravel-site!</h2>
<a href="{{route('hello-world')}}">Hello-World page</a><br>
<a href="{{route('goodbye-world')}}">Goodbye-World page</a>

@endsection