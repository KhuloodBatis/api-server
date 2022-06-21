<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commit;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array'
    ];
    //this function laravel know it as Accessor
    public function getTitleUpperCaseAttribute()
    {
        return strtoupper($this->title);
    }
    //this function laravel know it as mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtolower($value);
    }

    public function commits()
    {
        return $this->hasMany(Commit::class, 'post_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
}
