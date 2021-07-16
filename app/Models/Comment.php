<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $fillable = ['blog_post_id', 'content'];
    use HasFactory;

    public function blogPost()
    {
        return $this->belongsTo('App\Models\BlogPost');
    }
}
