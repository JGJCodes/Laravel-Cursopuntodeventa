<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'stock',
        'image',
        'sell_price',
        'status',
        'category_id',
        'provider_id',
    ];

    //Function Relation Product - Category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Function Relation Product - Provider
    public function provider(){
        return $this->belongsTo(Provider::class);
    }

}
