<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'village_pages_id', 'title', 'author', 'slug', 'post', 'image',
    ];
    
    protected $hidden = [

    ];

    public function village_page(){
        return $this->belongsTo(VillagePage::class, 'village_pages_id', 'id');
    }

}
