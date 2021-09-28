<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable=['id','name','email','phoneNo','address',];

    public function category(){

        return $this->hasMany('App\Models\Project');

    }
}
