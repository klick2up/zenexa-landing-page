<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'meta_desc',
        'badge',
        'date',
        'author_name',
        'author_title',
        'author_avatar',
        'image',
        'summary',
        'content',
    ];

    /**
     * Virtual attribute to keep compatibility with old author array notation.
     */
    public function getAuthorAttribute()
    {
        return [
            'name'   => $this->author_name,
            'title'  => $this->author_title,
            'avatar' => $this->author_avatar,
        ];
    }

    /**
     * Virtual attribute to compute dynamic read time.
     */
    public function getReadTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = max(1, ceil($words / 200));
        return $minutes . ' min read';
    }
}
