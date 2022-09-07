<?php

namespace App\Repository\Blog;

use App\Models\BlogPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BlogRepository {

    public function model(){
        return BlogPost::class;
    }

    public static function blogCategory(){
        $response=DB::table('blog_categories')->get();
        return $response;
    }
    //single blog category
    public function singleBlogCategory($id){
        $response=DB::table('blog_categories')->where('id',$id)->get();
        return $response;
    }

    //insert blog Category
    public static function storeBlogCategory($blogs){
        $response=$blogs->input('category');
        return DB::table('blog_categories')->insert(
            [
                'blog_category'=>$response,
                'slug'=> strtolower($response)
            ]);

    }

    public static function deleteBlogCategory($id){
        return DB::table('blog_categories')->where('id',$id)->delete();
    }



    //blog post


    public static function post_view(){
        return DB::table('blog_posts')->get();
    }
    public static function SingleBlogPost($id){
        return DB::table('blog_posts')->where('id',$id)->get();
    }

    public static function storeBlogPost($blog_post){


        if($blog_post->hasFile('image')){

            $files = $blog_post->file('image');
            $filename = $blog_post->image->getClientOriginalName();
            $destinationPath = public_path('/blog');
            $files->move($destinationPath, $filename);
            $imagePath=$filename;

            $auth=Auth::user()->id;
            $categories=$blog_post->input('category');
            $blog_upload=$imagePath;
            $posts_title=$blog_post->input('posts_title');
            $posts_content=$blog_post->input('posts_content');
            $metaTitle=$posts_title;
            $slug=strtolower($metaTitle);


            $blog=BlogPost::insert(
                [
                    'author_id'=>$auth,
                    'blog_categories'=>$categories,
                    'blog_image'=>$blog_upload,
                    'posts_title'=>$posts_title,
                    'posts_content'=>$posts_content,
                    'metaTitle'=>$metaTitle,
                    'slug'=>$slug
                ]
            );

            return $blog;

        }





    }

    public static function likePost($liked,$id){

    }
    public static function status($status){

    }
    public static function comment($comment){

    }
}


