<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;

class PostController extends Controller
{
   public function index(Post $post)
   {
       return $post->get();
   }
}
