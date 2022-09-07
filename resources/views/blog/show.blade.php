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
                @foreach ($single_post as $post )
                    
                

                <div class="card mb-3 shadow bg-white rounded">
                    <img class="card-img-top"
                    src="{{ asset('images/'.$post->image) }}"
                    alt="{{ $post->title }}">

                    <div class="card-body">
                      <h2 class="card-title">
                        <x-markdown>
                            {{ $post->title }}
                        </x-markdown>
                       
                      </h2>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Laudantium amet non
                        numquam maxime aspernatur. Sunt ea repudiandae, laborum rerum, vitae aliquam eveniet
                        praesentium odit doloremque dicta, voluptatibus delectus beatae. Incidunt.
                      </p>

                    </div>
                        <?php $post_id=App\Models\BlogPost::find($post->id) 
                        
                        ?>
                        <div class="ml-3">
                            <i class="fa fa-user"></i> {{ $post_id->author->first_name }} &nbsp;
                            <li class="fas fa-clock-o"></li> {{ $post_id->date }} &nbsp;
                            <li class="fas fa-blog"></li> Blog &nbsp;
                            <li class="fas fa-comment-o"></li> Comment &nbsp;
                        </div>

                        <div class="card-body mt-5">
                            <x-markdown>
                                 {{ $post->body }}
                            </x-markdown>
                        </div>

                  </div>

                 <div class="card shadow bg-white rounded">
                    <div class="card-body">
                       <div class="row">
                        <div class="col-md-3 float-left">
                            <img src="{{ asset('profile/'.$post_id->author->avatar) }}"
                            class="img-thumbnail rounded-circle"
                            width="200"
                            />
                        </div>

                        <div class="col-md-9 float-right">
                            <h2 class="card-title">{{ $post_id->author->first_name }}</h2>
                            <h5><i class="fas fa-clone"></i> go posts</h5>

                            <x-markdown> 
                                {{ $post_id->author->bio }}
                            </x-markdown>
                            
                           
                        </div>
                       </div>
                      </div>
                 </div>

                 @endforeach

                 <!--!comments-->

                 <div class="card mt-5 shadow bg-white rounded">

                    <div class="card-header" style="text-align: center">
                            <li class="fas fa-comments"></li> 5 Comments
                    </div>

                    <div class="card mt-4">
                        <div class="card-body shadow bg-white rounded">
                            <h2>John Doe</h2>

                            <div class="">
                                Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Ratione accusantium
                                 temporibus similique saepe labore est
                                 voluptatem unde provident tenetur repudiandae.
                                 Facilis dignissimos voluptas totam nam
                                 aliquid numquam sequi animi dolorum.
                            </div>
                        </div>
                    </div>

                    <!---->
                    <div class="card mt-4">
                        <div class="card-body shadow bg-white rounded">
                            <h2>John Doe</h2>

                            <div class="">
                                Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Porro, provident ullam officiis
                                quos minus consequatur reiciendis
                                totam accusantium reprehenderit consectetur.
                                Debitis adipisci non totam quae modi, blanditiis nisi esse pariatur?
                            </div>
                        </div>
                    </div>
                    <!---->


                    <div class="card mt-4">
                        <div class="card-body shadow bg-white rounded">
                            <h2>John Doe</h2>

                            <div class="">
                                Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                                Porro, provident ullam officiis
                                quos minus consequatur reiciendis
                                totam accusantium reprehenderit consectetur.
                                Debitis adipisci non totam quae modi, blanditiis nisi esse pariatur?
                            </div>
                        </div>
                    </div>

                 </div>
                 <!--comments end-->

            </div>
        </div>
    </div>
</section>


<div class="mt-5"></div>
@include('inc.footer')

@endsection
