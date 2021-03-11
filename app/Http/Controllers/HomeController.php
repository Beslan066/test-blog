<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() {
        $category = Category::orderBy('title')->get();
        $posts = Post::paginate(4);
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $category,
        ]);
    }

    public function getPostByCategory($slug) {
        $category = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        
        
        return view('pages.index', [
            'posts' => $current_category->posts()->paginate(3),
            'categories' => $category,
        ]);

        
    }
    public function getPost($slug_category, $slug_post){
        $post = Post::where('slug', $slug_post)->first();
        $categories = Category::orderBy('title')->get();

        return view('pages.post',[
            'post' => $post,
            'categories' => $categories,
            'slug_category' => $slug_category,
        ]);
    }
}
