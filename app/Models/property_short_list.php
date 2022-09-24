<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class property_short_list extends Authenticatable
{
     use HasApiTokens, HasFactory, Notifiable;
    //  protected $table='property_short_lists';
    //  public $timestamps=false;
    // function property()
    // {
    //     return $this
    // }
    
   protected $fillable=['property_id','student_id'];

   
   public function propertie()
   {
    return $this->belongsTo(propertie::class);
   }
    
}
