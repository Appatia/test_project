<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTag;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'blog' => 'string',
            'followers' => 'string',
            'likes' => 'string',
            'reply' => 'string',
            'comments' => 'string',
        ]);

        Blog::create($data);
        return redirect()->route('blog.index');

    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
//        $post = Post::findOrFail($id);
//        dd($post->title);
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Blog $blog)
    {
        $data = request()->validate([
            'title' => 'string',
            'bloggers' => 'string',
            'followers' => 'string',
            'likes' => 'string',
            'reply' => 'string',
            'comments' => 'string',
        ]);
        $blog->update($data);
        return redirect()->route('blog.show', $blog->id);
    }

    public function delete()
    {
        $blog = Blog::withTrashed()->find(2);
        $blog->restore();
        dd('deleted');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}

//namespace App\Http\Controllers;
//
//use App\Models\Blog;
//
//class BlogController extends Controller
//{
//    public function index()
//    {
//        $blogs = Blog::all();
//        return view('blogs', compact('blogs'));
//        $blogs = Blog::where('likes', 0)->get();
//        foreach ($blogs as $blogs) {
//            dump($blogs->title);
//            dump($blogs->blog);
//            dump($blogs->followers);
//            dump($blogs->likes);
//            dump($blogs->reply);
//        }
//        dd('end');
//    }
//    public function create()
//    {
//        $blogsArr = [
//            [
//            'title' => 'blog_title',
//            'blog' => 'blog_blog',
//            'followers' => 'blog_followers',
//            'likes' => 'blog_likes',
//            'reply' => 'blog_reply',
//            'comments' => 'blog_comments',
//            ],
//            [
//            'title' => 'second_title',
//            'blog' => 'second_blog',
//            'followers' => 'second_followers',
//            'likes' => 'second_likes',
//            'reply' => 'second_reply',
//            'comments' => 'second_comments',
//        ]
//        ];
//        foreach ($blogsArr as $item){
//            Blog::create($item);
//        }
//
//dd('created');
//    }
//    public function update()
//    {
//$blogs = Blog::find(5);
//$blogs->update([
//            'title' => 'plus',
//            'blog' => 'plus',
//            'followers' => 'minus',
//           // 'likes' => 'updated',
//           // 'reply' => 'updated',
//           // 'comments' => 'updated',
//    ]);
//dd('updated');
//    }
//    public function delete()
//    {
//        $blogs = Blog::find(6);
//        $blogs->delete();
//        dd('deleted');
//    }
//public function firstOrCreate()
//{
//   $anotherBlogs = [
//       'title' => 'third_title',
//       'blog' => 'third_blog',
//       'followers' => 'third_followers',
//       'likes' => 'third_likes',
//       'reply' => 'third_reply',
//       'comments' => 'third_comments',
//   ];
//   $blog = Blog::firstOrCreate([
//       'title' => 'blog_second_title'
//   ],[
//       'title' => 'blog_second_title',
//       'blog' => 'third_blog',
//       'followers' => 'third_followers',
//       'likes' => 'third_likes',
//       'reply' => 'third_reply',
//       'comments' => 'third_comments',
//   ]);
//   dump($blog->reply);
//    dd('finished');
//}
//public function updateOrCreate()
//{
//    $anotherBlogs = [
//        'title' => 'updateorcreate_title',
//        'blog' => 'updateorcreate_blog',
//        'followers' => 'updateorcreate_followers',
//        'likes' => 'updateorcreate_likes',
//        'reply' => 'updateorcreate_reply',
//        'comments' => 'updateorcreate_comments',
//    ];
//    $blog = Blog::updateOrCreate([
//        'title' => 'blog_not_title',
//    ],[
//        'title' => 'first_not_title',
//        'blog' => 'updateorcreate_blog',
//        'followers' => 'updateorcreate_followers',
//        'likes' => 'updateorcreate_likes',
//        'reply' => 'not_update_reply',
//        'comments' => 'updateorcreate_comments',
//    ]);
//    dump($blog->reply);
//    dd(222);
//}
//}

