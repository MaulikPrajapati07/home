<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class propertie extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //   protected $table='properties';
    // public $timestamps=false;
    // public function property()
    // {
    //     return $this->hasOne('App\Models\property_short_list');
    // }
    // protected $table='properties';
    // public $timestamps=false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'property_name',
        'pincode',
        'property_address',
        'allowed_gender',
        'property_own_status',
        'contract_file',
        'is_live',
        'property_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        //'phone',
        //'phone_otp',
        //'password',
       'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
        //'phone'=>'datetime',
      //'phone_otp'=>'datetime',
    ];


    public function property_short_list()
    {
        return $this->hasMany(property_short_list::class,'property_id');
    }
    public function property_amenitie()
    {
        return $this->hasOne(property_amenitie::class,'property_id');
    }
    public function property_detail()
    {
        return $this->hasOne(property_detail::class,'property_id');
    }
    public function property_masters()
    {
        return $this->belongsTo(property_masters::class,'id');
    }
    public function property_room()
    {
        return $this->hasOne(property_room::class,'property_id');
    }
    public function property_payment_details()
    {
        return $this->hasOne(property_payment_details::class,'property_id');
    }
    public function property_reviews()
    {
        return $this->hasOne(property_reviews::class,'property_id');
    }
    public function cities()
    {
        return $this->belongsTo(cities::class,'id');
    }
    public function bookings()
    {
        return $this->hasMany(bookings::class,'property_id');
    }
    public function college_distances()
    {
        return $this->hasMany(college_distances::class,'property_id');
    }
    public function coupan_properties()
    {
        return $this->hasMany(coupan_properties::class,'property_id');
    }
    public function coupan_transaction()
    {
        return $this->hasMany(coupan_transaction::class,'property_id');
    }
    public function property_photo()
    {
        return $this->hasMany(property_photo::class,'property_id');
    }
    public function users()//many to one
    {
        return $this->belongsTo(users::class,'id');
    }
    public function subscription_plans()//many to one
    {
        return $this->hasMany(subscription_plans::class,'id');
    }
    public function property_food_amenities()//many to one
    {
        return $this->hasOne(property_food_amenities::class,'property_id');
    }
}



