<?php

declare(strict_types=1);

namespace App\Models;

use AlAminFirdows\LaravelEditorJs\Facades\LaravelEditorJs;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

final class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'blocks'];

    public function getBodyAttribute(): ?string
    {
        try {
            return LaravelEditorJs::render($this->blocks);
        } catch (Exception $e) {
            return '';
        }
    }

    public function getExcerptAttribute(): ?string
    {
        return substr(strip_tags($this->body), 0, 120) ?? '';
    }

    public function getPublishedAtAttribute(): string
    {
        return $this->created_at->diffForHumans();
    }

    public function scopeLatest($query): Builder
    {
        return $query->orderBy('created_at', 'desc');
    }
}
