<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'is_published','archived_at'];

    public function archive()
    {
        $this->timestamps = false;
        $this->update(['archived_at' => now()]);
        $this->timestamps = true;
    }

    public function scopeUnarchived(Builder $query)
    {
        return $query->whereNull('archived_at');
    }
    public function scopeArchived(Builder $query)
    {
        return $query->whereNotNull('archived_at');
    }
    public function scopeSearchBody(Builder $query, $search)
    {
        return $query->where('body', 'like', "%{$search}%");
    }
    public function edit()
    {
        $this->update(['title' => 'new title']);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
