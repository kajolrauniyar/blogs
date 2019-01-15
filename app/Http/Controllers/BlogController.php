<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	//index page
	public function getIndex(){
		$post =Post::paginate(8);
        // dd($post);
		return view('blog.index')->withPost($post);

	}

	//single page
    public function getSingle($slug){
    	// return $slug;
    	//fetch from the database based on slug
    	$post=Post::where('slug','=',$slug)->first();
        // dd($post);
    	//return the view and pass in the post object
    	return view ('blog.single')->withPost($post);
    }
}
