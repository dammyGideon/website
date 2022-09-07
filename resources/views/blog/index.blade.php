@extends('layouts.app')

@section('content')
@include('inc.nav')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog</h2>
            <ul>
                <li>
                    <a href="{{ route('homepage') }}" style="text-decoration: none; color:floralwhite">
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

<section class="mt-5">
    <div class="container mt-5">
        <div class="row">

             <!--siderbar layout-->
             @include('layouts.blogSider')
             <!--slidebar ends-->


            <div class="col-md-8 main-layout">

                <?php
                 $limit=3;

                $post =App\Models\BlogPost::with('author')
                ->latestFirst()
                ->simplepaginate($limit);

        
                ?>

                @foreach ($post as $blog_post )

                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded">

                    <img class="card-img-top"
                    src="{{ asset('images/'.$blog_post->image) }}"
                    alt="{{ $blog_post->title }}">



                    <div class="card-body">
                      <h2 class="card-title">
                        <x-markdown>
                             {{ $blog_post->title }}
                        </x-markdown>
                       
                      </h2>
                      <p class="card-text">
                        <x-markdown>
                            {{ $blog_post->excerpt }}
                        </x-markdown>
                       
                      </p>

                    </div>


                    <div class="card-footer">
                        <div class="float-left">
                            <i class="fa fa-user"></i>{{ $blog_post->author->first_name}} &nbsp;
                            <li class="fas fa-clock-o"></li> {{ $blog_post->date }} &nbsp;
                            <li class="fas fa-blog"></li> Blog &nbsp;
                            <li class="fas fa-comments"></li> Comment &nbsp;
                        </div>

                        <div class="float-right">
                            Continue Reading
                            <a href="{{ route('blog.show', $blog_post->slug) }}">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                      </div>
                  </div>
                  @endforeach

                <div class="float-right p-3">
                    {{$post->links()}}
                </div>

            </div>


        </div>
    </div>
</section>


<div class="mt-5"></div>
@include('inc.footer')

@endsection
