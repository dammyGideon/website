<?php

namespace App\Http\Controllers\Dashboard\super_admin;

use App\Http\Controllers\Controller;
use App\Repository\Blog\BlogRepository;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index(){
        return view('blog.index');
    }

    public function show($id){
        
    }
    public function blogCategoryView(){
        $response = BlogRepository::blogCategory();
        return view('dashboard.super_admin.blog',['response'=>$response]);
    }
    //store category
    public function storeBlogCategory(Request $request){
        BlogRepository::storeBlogCategory($request);
        return redirect()->back()->with('success','blog category is uploaded');
    }
    public function deleteCategory($id){
        BlogRepository::deleteBlogCategory($id);
        return redirect()->back()->with('success','blog category deleted successfully');
    }




    public function blogPost(Request $request){
       try {
            BlogRepository::storeBlogPost($request);
            return redirect()->back()->with('success','blog stored');
       } catch (Exception $e) {
            return $e->getMessage();
       }

    }

    public function blogPostView(){
       $response=BlogRepository::post_view();
        return view('dashboard.super_admin.blog_post',['response'=>$response]);
    }


}
