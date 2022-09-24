<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class property_payment_details extends Model
{
    use HasFactory,HasApiTokens,Notifiable;

    protected $fillable=['property_id','payment_mode'];

    public function propertie()
    {
        return $this->belongsTo(propertie::class);
    }
}
