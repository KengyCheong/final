<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable=['id','name','budget','deadline','clientID'];

    public function client(){

        return $this->belongsTo('App\Models\Client');
    }
}
