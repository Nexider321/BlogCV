<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['name', 'content', 'slug', 'logo', 'category_id', 'is_published'];
    public function Tags()
    {
        return $this->hasMany(Tag::Class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
