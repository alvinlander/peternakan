<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Goat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getImgGoatAttribute($value)
    {
        return Voyager::image($value);
    }
}
