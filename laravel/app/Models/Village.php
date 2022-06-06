<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Village extends Model
{   
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'heads', 'contacts'
    ];

    protected $hidden = [

    ];

    public function products(){
        return $this->hasMany(Product::class, 'village_id', 'id');
    }

    public function culinaries(){
        return $this->hasMany(Culinary::class, 'village_id', 'id');
    }

}
