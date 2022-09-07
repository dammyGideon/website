<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable=[
            'author_id',
            'blog_categories_id',
            'posts_title',
            'posts_content',
            'metaTitle',
            'slug',
            'post_like',
            'status'
    ];

    public $timestamps = true;

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function scopeLatestFirst(){
        return $this->orderBy('created_at', 'desc');
    }
    public function getDateAttribute(){
        return $this->created_at->diffForHumans();
    }
}
