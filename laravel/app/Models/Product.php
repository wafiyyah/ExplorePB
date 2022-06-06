<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'village_id', 'about', 'price', 'seller', 'contact', 'address', 'image'
    ];

    protected $hidden = [

    ];

    public function village(){
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }

}

