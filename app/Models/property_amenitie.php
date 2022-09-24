<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class property_amenitie extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable=['property_id','food','room_accessories'];

    public function propertie()
    {
     return $this->belongsTo(propertie::class);
    }
     
}
