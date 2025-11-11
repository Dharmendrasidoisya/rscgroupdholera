<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterform extends Model
{
    use HasFactory;
    // protected $table ='masters';
    // protected $guarded = ['name','email','subject','phone','message'];
    protected $table="masters";
    protected $fillable = [];
}
