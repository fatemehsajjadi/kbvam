<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    public function pay_status()
    {
        return $this->belongsTo(PayStatus::class,'payment_status');
    }
}
