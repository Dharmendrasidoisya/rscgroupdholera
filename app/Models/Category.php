<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    protected $guarded = [];
    
    public function Categoryseo(){
        return $this->hasMany(CategorySEO::class);
    }
    public function subcategoeyseo(){
        return $this->hasMany(SubcategorySEo::class);
    }
}
