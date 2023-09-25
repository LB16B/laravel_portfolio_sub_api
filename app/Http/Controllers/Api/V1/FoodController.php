<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Food;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Http\Resources\FoodResource;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FoodResource::collection(Food::all());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoodRequest $request)
    {
        $food = Food::create($request->validated());

        return FoodResource::make($food);
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return FoodResource::make($food);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        $food->update($request->validated());

        return FoodResource::make($food);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food->delete();

        return response()->noContent();
    }
}
