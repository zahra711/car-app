<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  post extends Model
{
    use HasFactory;
    protected $fillable=[
        'company','model','year','fuel','transfer'
        ,'cilandr','VIN','color','price','packages',
        'img','user_id'
    ];
    public function setPackagesAttribute($value)
    {
        $this->attributes['packages'] = json_encode($value);
    }

    public function getPackagesAttribute($value)
    {
        return $this->attributes['packages'] = json_decode($value);}
}
