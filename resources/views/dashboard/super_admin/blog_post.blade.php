@extends('layouts.dashboard')

@section('content')
@include('inc.superDashboardNav')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="" class="btn btn-dark" data-toggle="modal" data-target="#modal-default">Blog Post</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card card-default">
          <div class="card-header" style="background-color:#48887b">
            <h3 class="card-title" style="color:white">Blog</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">


          <div class="row">
                {{-- @php
                    $published=Illuminate\Support\Facades\DB::table('blog_posts')->where('status',0)->latest()->get();

                @endphp --}}


                

                <div class="col-md-7">

                <form method="POST"enctype="multipart/form-data" action="">

                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" id="category" name="posts_title" value="" class="form-control" onkeyup="setValue(category,slug)">
                        </div>
                    </div>
                            <div class="form-group">
                                <label>Excerpt</label>
                                <textarea name="posts_content" rows="4" cols="50" maxlength="400" class="form-control">
                                </textarea>
                            </div>
                    </div>

                    <div class="col-md-5">

                    
                        <label>Image</label>
                         <div class="custom-file">
                        
                            <div class="form-group">
                                <input type="file" name="image" class="custom-file-input">
                                <label class="custom-file-label" >Choose file</label>
                            </div>
                        </div>


                        
                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="posts_body" rows="4" cols="50" maxlength="400" class="form-control">
                            </textarea>
                        </div>
                        
                        @php
                        $blog_category=Illuminate\Support\Facades\DB::table('blog_categories')->get();
                        @endphp

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option></option>
                                @foreach ( $blog_category as $category )
                                <option value="{{ $category->blog_category }}">{{ $category->blog_category }}</option>
                                @endforeach

                            </select>
                        </div>

                        <button type="submit" class="btn btn-dark">Publish post</button>
                        <a href=""lass="btn btn-danger">Delete post </a>
                        <button type="submit" class="btn btn-file">Edit post</button>
                    </div>
                  </form>

                
          </div>
         </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





<script>
    function setValue(category,slug){
            slug.value=category.value
    }
</script>

@endsection
