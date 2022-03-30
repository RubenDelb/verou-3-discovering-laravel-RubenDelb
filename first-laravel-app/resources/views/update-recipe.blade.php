@extends('layouts.app')

@section('body')
    <form action="" method="post">
        @csrf
        <label for="recipeTitle">Recipe Title: </label>
        <input type="text" name="recipeTitle" id="recipeTitle" value="{{ $recipe->title }}"><br>
        <label for="recipeDescription">Recipe Description: </label>
        <textarea name="recipeDescription" id="recipeDescription">{{ $recipe->description }}</textarea><br>
        <label for="recipeDifficulty">Recipe Difficulty: </label>
        <input type="number" name="recipeDifficulty" id="recipeDifficulty" value="{{ $recipe->difficulty }}"><br>
        <label for="recipeOrigin">Recipe Origin: </label>
        <input type="text" name="recipeOrigin" id="recipeOrigin" value="{{ $recipe->origin }}"><br>
        <label for="recipeDuration">Recipe Duration: </label>
        <input type="text" name="recipeDuration" id="recipeDuration" value="{{ $recipe->duration }}"><br>
        <label for="recipeImageLink">Recipe ImageLink: </label>
        <input type="text" name="recipeImageLink" id="recipeImageLink" value="{{ $recipe->image_link }}"><br>
        <label for="recipeLink">Recipe Link: </label>
        <input type="text" name="recipeLink" id="recipeLink" value="{{ $recipe->link_to_recipe }}"><br>
        <input type="hidden" name="id" id="id" value="{{ $recipe->id }}">
        <input type="submit" value="Update this recipe!">

    </form>
@endsection
