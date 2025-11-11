<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategorySEo extends Model
{
    use HasFactory;
    protected $table = 'subseocategory';
    protected $filable = [];
    
    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }
    // public function product(){
    //     return $this->belongsTo(Product::class);
    // }
}
