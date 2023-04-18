<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Summary of Category
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    /**
     * Summary of post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
