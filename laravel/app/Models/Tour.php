<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'day', 'time', 'about', 'address',
        'ticket', 'village_id'
    ];

    protected $hidden = [

    ];

    public function village(){
        return $this->belongsTo(Village::class, 'village_id', 'id');
    }
    public function galleries(){
        return $this->hasMany(TourGallery::class, 'tours_id', 'id');
    }

}
