@extends('layouts.app')

@section('content')
@include('inc.nav');

<style>
    .jumbotron_image{
    text-align: center;
    padding-top: 40rem;
    padding-bottom: 10rem;
    height: 100%;
    }

    .lead span {
    color: orange;
    font-weight: bold;
    }
    .bg-cover{
        background-size: cover
        color: white;
        background-position: center center;
        position: relative;
        z-index: -2;
    }
    .bg-cover{
        background-image: url('../../../../assets/img/maxresdefault.jpg')
    }
    .overlay {
    background-color: #000;
    opacity: 0.5;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
}
</style>
<div class="jumbotron jumbotron bg-cover jumbotron_image">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="display-3 mb-3" style="color:floralwhite">Who We are </h1>
      {{-- <p class="lead">Posted on <span>23 September 2017</span></p> --}}
    </div>
</div>
<!-- End Page Title Area -->
<br/>

<div class="jumbotron">
    <div class="container">
        <h2 class="display-4 " style="text-align: center" >Perks</h2>
        <div class="row mt-4">
            <div class="col-sm-6 col-md-6">
               <ul>
                <div class="my-3">

                        <span class="pull-left mr-1">💰</span>
                        <h4>Competitive salary & Stock options</h4>

                </div>

                <div class="my-3">
                    <span class="pull-left mr-1">💻</span>
                        <h4>MacBook Pro (or laptop of your choice)</h4>
                </div>

                <li class="my-3">
                    <span class="pull-left mr-1">🛫 </span>
                    <h4>Annual company offsite</h4>
                </li>

                <li class="my-3">
                    <span class="pull-left mr-1">📖</span>
                    <h4>Annual education budget</h4>
                </li>

                <div>
                    <span class="pull-left mr-1">☕️</span>
                    <h4>
                        Team building activities - annual Hackathon, biweekly coffee chat, etc
                    </h4>
                </div>
               </ul>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="my-3">
                   <span class="pull-left mr-1">⏰</span>
                    <h4> Flexible working hours & Remote friendly</h4>
                </div>

                <div class="my-3">
                    <span class="pull-left mr-1"> 🏝 </span>
                    <h4>Paid vacation + Sick leave</h4>
                </div>


                <div class="my-3">
                    <span class="pull-left mr-1">🧸</span>
                    <h4> Paid parental leave</h4>
                </div>

                <div class="my-3">
                    <span class="pull-left mr-1">🔁</span>
                    <h4>
                         Unlimited full-time contracts
                    </h4>
                </div>

            </div>

        </div>
    </div>
</div>

<section class="my-4">

    <article class="mt-5">
        <div style="margin-top:150px;" class="my-2">
            <h2 style="text-align: center">Where we are</h2>
            <h4 style="text-align: center" class="mt-4">
                Along with these three locations,
                you’ll find Moguls spread<br/> throughout
                the world across 21 different countries!
            </h4>
        </div>

       <div class="container" style="margin-top:100px ">
        <div class="row">
            <div class="col-md-4">
             <img src="{{ asset('images/blog-default.png')}}"
                class="rounded-3 img-fluid"
             />
            </div>

            <div class="col-md-4">
             <img src="{{ asset('images/blog-default.png')}}"
             class="rounded-3 img-fluid"
             />
            </div>

            <div class="col-md-4">
             <img src="{{ asset('images/blog-default.png')}}"
             class="rounded-3 img-fluid"
             />
            </div>

         </div>
       </div>


    </article>

    <article class="my-5" style="background:#6c757d; padding:2rem">

        <div>
            <h1 style="text-align: center; color:floralwhite">
                Open positions
            </h1>

           <div class="container my-4">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </article>


</section>





@include('inc.footer');
@endsection
