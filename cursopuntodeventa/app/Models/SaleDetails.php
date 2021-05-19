<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetails extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sale_id',
        'product_id',
        'quantity',
        'price',
        'discount',
    ];

    //Function Relation Sale - Provider
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Function Relation saleDetails - sale
    public function sale(){
        return $this->belongsTo(Sale::class);
    }
}
