<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function getAllRecipes()
    {
        $recipes = Recipe::get(); // Create a collection out of my database and store it in the variable recipes
        return view('recipes', compact('recipes'));
    }

    public function createNewRecipe(Request $newRecipeData)
    {
        $recipeData = array('title' => $newRecipeData->recipeTitle,
            'description' => $newRecipeData->recipeDescription,
            'origin' => $newRecipeData->recipeOrigin,
            'difficulty' => $newRecipeData->recipeDifficulty,
            'duration' => $newRecipeData->recipeDuration,
            'image_link' => $newRecipeData->recipeImageLink,
            'link_to_recipe' => $newRecipeData->recipeLink,
        );
        Recipe::create($recipeData);
        return $this->getAllRecipes();
    }

    public function showUpdateForm(Request $req)
    {
        // dd($req->id);
        $recipe = Recipe::where('id', $req->id)->first();
        // dd($recipe);
        return view('update-recipe', compact('recipe'));
    }

    public function updateRecipe(Request $newRecipeData)
    {
        $recipeData = array('title' => $newRecipeData->recipeTitle,
            'description' => $newRecipeData->recipeDescription,
            'origin' => $newRecipeData->recipeOrigin,
            'difficulty' => $newRecipeData->recipeDifficulty,
            'duration' => $newRecipeData->recipeDuration,
            'image_link' => $newRecipeData->recipeImageLink,
            'link_to_recipe' => $newRecipeData->recipeLink,
        );
        Recipe::where('id', $newRecipeData->id)->update($recipeData);
        return $this->getAllRecipes();
    }
}
