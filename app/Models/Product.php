<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_product',
        'img',
        'name',
        'type',
        'group',
        'position',
        'use_area',
        'company',
    ];
    protected $primaryKey = 'id_product';

}
