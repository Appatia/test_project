<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_id', 'id');

    }
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'blog_id', 'id');

    }
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'contact_id', 'id');

    }
    public function videos()
    {
        return $this->hasMany(Video::class, 'video_id', 'id');

    }
}
