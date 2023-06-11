<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; // Post::factory()

    protected $guarded = [];
    // protected $guarded = ['id'];
    // protected $fillable = ['title', 'excerpt', 'body'];

    protected $with = ['category', 'author'];

    public function category ()
    {
        // hasOne, hasMany, belongsTo, belongsMany
        return $this->belongsTo(Category::class);
    }

    public function author() // author_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
