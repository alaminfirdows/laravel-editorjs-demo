<?php

namespace App\Models;

use AlAminFirdows\LaravelEditorJs\Facades\LaravelEditorJs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'blocks', 'body'];

    public static function boot()
    {
        parent::boot();

        static::creating(function (self $post) {
            $post->body = LaravelEditorJs::render($post->blocks);
        });

        static::updating(function (self $post) {
            $post->body = LaravelEditorJs::render($post->blocks);
        });
    }

    public function getExcerptAttribute()
    {
        return substr(strip_tags($this->body), 0, 120);
    }

    public function getPublishedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
