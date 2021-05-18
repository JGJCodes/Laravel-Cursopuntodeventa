<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shopping_id',
        'product_id',
        'quantity',
        'price',
    ];

    //Function Relation Purchase - Provider
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Function Relation PurchaseDetails - Purchase
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
}
