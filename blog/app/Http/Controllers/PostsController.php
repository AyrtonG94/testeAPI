<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function createPost (Request $request) {
        Post::create($request->all());
    }


    public function readAllPosts () {
        
        $posts = Post::all();

        if($posts) {

        return $posts; 
        }

        else {
            $array = ['error' => 'Ainda não existe postagens criadas'];
            return $array;
        }
    }


    public function readPost ($id) {
        $post = POST::find($id);

        if($post) {
            return $post;
        }
        else {
            $array = ['error' => 'Post não localizado'];
            return $array;
        }
        
    }


    public function updatePost (Request $request, $id) {
        $post = POST::find($id);

        if($post) {
                $post->update($request->all());      
        }
        else {
            $array = ['error' => 'Post não localizado'];
            return $array;
        }
       
    }


    public function deletePost ($id) {
     
             $post = POST::find($id);
             if($post) {
                $post->delete();
             }
             
             else {
                $array = ['error' => 'Post não localizado'];
            return $array;
             }  
    }
}
