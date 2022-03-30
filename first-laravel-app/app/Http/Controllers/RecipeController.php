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
}
