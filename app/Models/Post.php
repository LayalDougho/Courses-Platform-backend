<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'image', 'category_id'];

    public function category() : BelongsTo
{
    return $this->belongsTo(Category::class);
}

public function tags() :BelongsToMany
{
    return $this->belongsToMany(Tag::class, 'post_id', 'tag_id');
}

}
