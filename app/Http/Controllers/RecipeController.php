<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateRecipeRequest;
use Illuminate\Http\Response;


class RecipeController extends Controller
{
    
    public function createRecipe(CreateRecipeRequest $request){
        if ($request->missing('name')) return response()->json('missing recipe name', Response::HTTP_INTERNAL_SERVER_ERROR);
        

    }


}
