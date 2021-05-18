<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id',
        'user_id',
        'purchase_date',
        'tax',
        'total',
        'status',
        'picture',
    ];

    //Function Relation Purchase - User
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Function Relation Purchase - Provider
    public function provider(){
        return $this->belongsTo(Provider::class);
    }

    //Function Relation Purchase - PurchaseDetail
    public function purchaseDetails(){
        return $this->hasMany(PurchaseDetails::class);
    }
}
