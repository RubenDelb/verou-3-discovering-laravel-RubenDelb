@extends('layouts.app')

@section('body')
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Difficulty</th>
                <th scope="col">Origin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recipes as $recipe)
                <tr>
                    <th scope="row">{{ $recipe->title }}</th>
                    <td>{{ $recipe->description }}</td>
                    <td>{{ $recipe->difficulty }}</td>
                    <td>{{ $recipe->origin }}</td>
                    <td><a href="{{route('update-recipe')}}?id={{$recipe->id}}" class="btn btn-warning me-2">Update</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="" method="post">
        @csrf
        <label for="recipeTitle">Recipe Title: </label>
        <input type="text" name="recipeTitle" id="recipeTitle"><br>
        <label for="recipeDescription">Recipe Description: </label>
        <input type="text" name="recipeDescription" id="recipeDescription"><br>
        <label for="recipeDifficulty">Recipe Difficulty: </label>
        <input type="number" name="recipeDifficulty" id="recipeDifficulty"><br>
        <label for="recipeOrigin">Recipe Origin: </label>
        <input type="text" name="recipeOrigin" id="recipeOrigin"><br>
        <label for="recipeDuration">Recipe Duration: </label>
        <input type="text" name="recipeDuration" id="recipeDuration"><br>
        <label for="recipeImageLink">Recipe ImageLink: </label>
        <input type="text" name="recipeImageLink" id="recipeImageLink"><br>
        <label for="recipeLink">Recipe Link: </label>
        <input type="text" name="recipeLink" id="recipeLink"><br>
        <input type="submit" value="Create new recipe!">
    </form>
@endsection
