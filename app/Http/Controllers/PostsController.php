<?php

namespace App\Http\Controllers;


use App\Posts;

use Carbon\Carbon;
// use App\User;


class PostsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['home','show']);
    }
    


    

     function home(){


     //$task = Post::all();

     	$post = Posts::latest();

        
        $post = Posts::filter();

        $archives = Posts::archives();


        $post = $post->get();
     	//return $task;

       return view('posts.home', compact('post','archives'));

    }


    function show(Posts $post){

    	return view('posts.showposts', compact('post'));
    }


     function create(){

    	return view('posts.createpost');
    }


    function store(){

    	$post = new Posts;


    	$this->validate(request(), [

    		'title' => 'required',
    		'body' => 'required'

    	]);


        $post::create([

            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body')
             

        ]);


    	return redirect('/');
    	//return view('/');
    }


   


}
