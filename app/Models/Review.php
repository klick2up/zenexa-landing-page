<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'stars',
        'review_text',
        'client_name',
        'client_title',
        'project_name',
        'client_avatar',
    ];
}
