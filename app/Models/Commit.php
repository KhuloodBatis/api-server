<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Commit extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
