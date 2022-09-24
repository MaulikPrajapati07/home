<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class reviewstore extends Model
{
    use HasFactory;
    protected $table = "rating";
    protected $primaryKey = "id";

   
}