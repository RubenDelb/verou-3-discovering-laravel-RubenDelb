@extends('layouts.app')

@section('body')
    <h2>My Recipe-Collection: </h2>
    <h6>(from my database)</h6><br>
    <ul>
        @foreach ($recipes as $recipe)
            <li>{{ $recipe->title }}</li>
        @endforeach
    </ul>
@endsection
