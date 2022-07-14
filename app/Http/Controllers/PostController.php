<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\tag;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();
//        $category = Category::find(1);
//        $post = Post::find(1);
//        $tag = Tag::find(1);
//        dd($tag->posts);
//        dd($post->category);
//        dd($category->posts);
//        $posts = Post::where('category_id', $category->id)->get();
//        dd($posts);
//        dd($category->title);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
//        dd($data);
//        $tags = $data['tags'];
//        unset($data['tags']);
//        dd($data);
        $tags = $data['tags'];
        unset($data['tags']);
//        dd($tags, $data);
        $post = Post::create($data);
        $post->tags()->attach($tags);
//        foreach ($tags as $tag) {
//            PostTag::firstOrCreate([
//                'tag_id' => $tag,
//                'post_id' => $post->id
//            ]);
//        }

        return redirect()->route('post.index');

    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
//        $post = Post::findOrFail($id);
//        dd($post->title);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
//        $posts = Blog::where('likes', 0)->get();
//        foreach ($posts as $post) {
//            dump($posts->title);
//            dump($posts->blog);
//            dump($posts->followers);
//            dump($posts->likes);
//            dump($posts->reply);
//        }
//        dd('end');
//    }
//        dump($post->title);
//        dump($post->content);
//        dump($post->image);
//        dump($post->Likes);
//        dd($post->is_published);


