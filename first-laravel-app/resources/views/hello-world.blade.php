@extends('layouts.app')

@section('body')

<h2>Hello World</h2>
<a href="{{route('goodbye-world')}}">Goodbye-World page</a><br>
<a href="/">Homepage</a>

@endsection