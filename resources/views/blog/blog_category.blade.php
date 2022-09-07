@extends('layouts.app')

@section('content')
    @include('inc.nav')
    <!-------------------
    --------Header end----------------------------------------->

    <!---------------------------Section one--------------------------------->
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog</h2>
                <ul>
                    <li>
                        <a href="{{ asset('/') }}">
                            Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!---------------------------Section one end----------------------------->

    <!----------------------------Section Two ------------------------------------------------>
    <section class="content-body">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-md-4 col-lg-3">
                    <div class="position-sticky" style="top: 3rem;">
                        <nav id="sidebar" class="p-4 mb-3 bg-white rounded">

                            {{-- Recent post --}}
                            <div class="sidebar-header">
                                <div class="input-group">
                                    <input type="search" id="form1" class="form-control" placeholder="Search"/>
                                    <button type="button" class="btn btn-secondary">
                                        <span class=""><i class="fas fa-search"></i></span>
                                    </button>
                                </div>
                                <h5 class="mt-4">Recent Posts</h5>
                            </div>
                            @php
                                $posts=Illuminate\Support\Facades\DB::table('blog_posts')->take(5)->get();
                            @endphp
                            @foreach ($posts as $post )
                                <ul class="list-unstyled" style="list-style: none">
                                    <li>
                                        <a href="{{ $post->id }}">{{ $post->posts_title }}</a>
                                    </li>
                                </ul>
                            @endforeach

                            <div class="sidebar-header mt-4">
                                <h5>Categories </h5>
                            </div>
                            @php
                                $categories=Illuminate\Support\Facades\DB::table('blog_categories')->get();

                            @endphp
                            @foreach ($categories as $category )
                                @php
                                    $blog_ids=Illuminate\Support\Facades\DB::table('blog_posts')->where('blog_categories',$category->blog_category )->pluck('id');
                                      foreach ($blog_ids as $blog_id) {

                                      }
                                @endphp
                                <ul class="list-unstyled">
                                    <li style="">
                                        <a href="{{$blog_id}}">{{ $category->blog_category }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        </nav>
                    </div>
                </div>
                <div class="main-content col-md-8 col-lg-6 mt-4">
                    @foreach($viewData['post_table'] as $category)
                        <div class="">
                            <button style="padding: 7px;">Category:{{$viewData['category_title']}}</button>


                        </div>


                        <div class="col-lg-3 ">

                        </div>
                    @endforeach
                </div>
            </div>
    </section>


    @include('inc.footer')
@endsection
