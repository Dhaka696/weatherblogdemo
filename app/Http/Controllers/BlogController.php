<?php

namespace App\Http\Controllers;
use App\Models\Blog;  
use Illuminate\Http\Request;  
class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
    }
 
    public function blog()
    {
      $array = array();
      $blogs = Blog::paginate('5');
      foreach($blogs as $blog){
        $blog->date = date('l F d, Y', strtotime($blog->date));
        $blog->url = "/blog/".$blog->id;
        $longstring = preg_replace('/<[^<]+?>/s', ' ', $blog->article);
        $longstring = str_replace('&nbsp;', '', $longstring);
        $blog->shortened = (strlen($longstring) > 13) ? substr($longstring,0,300).'...' : $longstring; 
      }
      $array['items'] = $blogs;
      return $array; 
    }

    public function topblog()
    {
      $array = array();
      $blogs = Blog::limit('5')->get();
      foreach($blogs as $blog){
        $blog->date = date('l F d, Y', strtotime($blog->date));
        $blog->url = "/blog/".$blog->id;
        $longstring = preg_replace('/<[^<]+?>/s', ' ', $blog->article);
        $longstring = str_replace('&nbsp;', '', $longstring);
        $blog->shortened = (strlen($longstring) > 13) ? substr($longstring,0,300).'...' : $longstring; 
      }
      $array['items'] = $blogs;
      return $array; 
    }

    public function recentblog()
    {
      $array = array();
      $blogs = Blog::limit('3')->get();
      foreach($blogs as $blog){
        $blog->date = date('l F d, Y', strtotime($blog->date));
        $blog->url = "/blog/".$blog->id;
        $longstring = preg_replace('/<[^<]+?>/s', ' ', $blog->article);
        $longstring = str_replace('&nbsp;', '', $longstring);
        $blog->shortened = (strlen($longstring) > 13) ? substr($longstring,0,300).'...' : $longstring; 
      }
      $array['items'] = $blogs;
      return $array; 
    }

    public function blogsingle($id = null)
    {
      $blog = Blog::where('id', $id)->first();
      $blog->date = date('l F d, Y h:i A', strtotime($blog->date)); 

      return view('blogsingle', ['blog' => $blog]);  
    }

    
}
