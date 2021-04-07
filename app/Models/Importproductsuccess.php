<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importproductsuccess extends Model
{
    use HasFactory;
    public $table = "importproductsuccesses";
    protected $fillable = [
        'id_product',
        'quantity',
        'cost',
        'date_EXP'
    ];
    

    // public function product(){
    //     return $this->hasOne(Product::class,'id_product','id_product');
    // }
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
    
}
