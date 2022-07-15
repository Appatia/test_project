<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id');
    }
    use HasFactory;

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_tags', 'tag_id', 'blog_id');
    }
    use HasFactory;
    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_tags', 'tag_id', 'contact_id');
    }
    use HasFactory;
    public function videos()
    {
        return $this->belongsToMany(Video::class, 'video_tags', 'tag_id', 'video_id');
    }
}
