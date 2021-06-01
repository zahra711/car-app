<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable=[
        'company','model','year','fuel','transfer',
        'cilandr','VIN','color','price','packages','img','user_id'
        ];
}
