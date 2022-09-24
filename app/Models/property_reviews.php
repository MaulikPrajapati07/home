<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class property_reviews extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable=['property_id','room_share_type'];

    public function propertie()
    {
     return $this->belongsTo(propertie::class);
    }
}
