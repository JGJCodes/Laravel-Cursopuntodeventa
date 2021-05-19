<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'user_id',
        'sale_date',
        'tax',
        'total',
        'status',
    ];

    //Function Relation Sale - User
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Function Relation sale - Provider
    public function client(){
        return $this->belongsTo(Client::class);
    }

    //Function Relation sale - PurchaseDetail
    public function saleDetails(){
        return $this->hasMany(SaleDetails::class);
    }
}
