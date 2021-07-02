<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'phone', 'cart_id', 'street', 'total', 'int_number', 'ext_number', 'country', 'state', 'zipcode', 'payment_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
