<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['blog_post_id', 'content'];
    use HasFactory;

    public function blogPost()
    {
        return $this->belongsTo('App\Models\BlogPost');
    }
}
