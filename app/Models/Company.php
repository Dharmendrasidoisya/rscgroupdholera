<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companys';
    protected $primarykey = 'id';
    protected $fillable = [
        'company_name',
        'designation',
        'email1',
        'email2',
        'address1',
        'address2',
        'contact_no1',
        'contact_no2',
        'contact_no3',
        'website_url',
        'website_title',
        'company_logo',
        'status',
        'des',
        'em',
        'cont1',
        'cont2',
        'cont3',
        'web',
        'add1',
        'add2',
    ];
}
