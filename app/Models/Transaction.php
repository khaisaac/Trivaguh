<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'flight_id',
        'flight_class_id',
        'name',
        'email',
        'phone',
        'number_of_passenger',
        'promo_code_id',
        'payment_status',
        'sub_total',
        'grand_total',
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function class()
    {
        return $this->belongsTo(FlightClass::class, 'flight_class_id');
    }

    public function promo()
    {
        return $this->belongsTo(PromoCode::class, 'promo_code_id');
    }

    public function passengers()
    {
        return $this->hasMany(TransactionPassenger::class);
    }
}
