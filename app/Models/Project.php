<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'category',
        'tech',
        'color',
        'icon',
        'icon_color',
        'cover_image',
        'desc',
    ];
}
