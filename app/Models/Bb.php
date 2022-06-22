<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    protected $fillable = [
        'title',
        'main',
        'price'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
