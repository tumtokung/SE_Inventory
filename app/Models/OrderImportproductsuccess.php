<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderImportproductsuccess extends Pivot
{
    use HasFactory;
    public $table = "order_importproductsuccesses";   
}
