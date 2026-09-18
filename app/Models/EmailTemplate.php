<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = ['name', 'subject', 'body_html'];

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}