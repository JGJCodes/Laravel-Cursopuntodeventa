<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'ruc_number',
        'address',
        'phone',
    ];

    //Function Relation Provider - Product
    public function products(){
        return $this->hasMany(Product::class);
    }

    //Function Relation Provider - Purchase
    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
