<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TourGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'tours_id', 'image'
    ];

    protected $hidden = [

    ];

    public function tour(){
        return $this->belongsTo(Tour::class, 'tours_id', 'id');
    }
}
