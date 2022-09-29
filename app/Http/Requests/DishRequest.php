<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
{
    public function rules()
    {
        return [
            'dish.title' => 'required|string|max:100',
        ];
    }
}
