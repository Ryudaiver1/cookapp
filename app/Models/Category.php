<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
    
    public function getByCategory(int $limit_count = 5)
    {
         return $this->dishes()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
