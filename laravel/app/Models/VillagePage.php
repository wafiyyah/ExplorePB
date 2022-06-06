<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VillagePage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'DeskProfil', 'titleMaps', 'urlGmaps', 'adress', 'twt', 'ig', 'email'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany(ProfileGallery::class, 'village_pages_id', 'id');
    }

    public function articles(){
        return $this->hasMany(Article::class, 'village_pages_id', 'id');
    }

}

