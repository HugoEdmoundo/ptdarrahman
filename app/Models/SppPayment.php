<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppPayment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','spp_id','proof','status', 'amount'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function spp() {
        return $this->belongsTo(Spp::class);
    }
}
