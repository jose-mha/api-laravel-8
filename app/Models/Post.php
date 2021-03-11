<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute($key)
    {
        return substr($this->content, 0, 120);
    }

    public function getPublishedAtAttribute($key)
    {
        return $this->created_at->format('d/m/Y');
    }
}
