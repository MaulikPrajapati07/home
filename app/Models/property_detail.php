<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class property_detail extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable=['property_id','owner_name','owner_email'];

    public function propertie()
    {
     return $this->belongsTo(propertie::class);
    }
}
