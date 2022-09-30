<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Http\Requests\DishRequest;
use App\Models\Category;

class DishController extends Controller
{
    public function index(Dish $dish)
    {
        return view('home')->with(['dishes' => $dish->getPaginateByLimit()]);
    }
    
    public function show(Dish $dish)
    {
        return view('dishes/show')->with(['dish' => $dish]);
    }
    
    public function create(Category $category)
    {
        return view('dishes/create')->with(['categories' => $category->get()]);
    }
    
    public function store(Dish $dish, DishRequest $request)
    {
        $input = $request['dish'];
        $dish->fill($input)->save();
        return redirect('/dishes/' . $dish->id);
    }
    
    public function edit(Dish $dish)
    {
        return view('dishes/edit')->with(['dish' => $dish]);
    }
    
    public function update(DishRequest $request, Dish $dish)
    {
        $input_dish = $request['dish'];
        $dish->fill($input_dish)->save();
        return redirect('/dishes/' . $dish->id);
    }
    
    public function delete(Dish $dish)
    {
        $dish->delete();
        return redirect('/');
    }

}
