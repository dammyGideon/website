@extends('layouts.dashboard')

@section('content')
@include('inc.dashboardNav')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Outsourcing</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="" class="btn btn-dark" data-toggle="modal" data-target="#modal-default">Add Project</a>
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
            <h3 class="card-title" style="color:white">Data Outsourcing</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">

            <div class="card-body">
                  <!-- Default box -->

            <div class="card card-solid">
                <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">




                    @foreach ( $service_details as $value )

                    <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">

                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                            </div>



                                        {{ strip_tags( html_entity_decode($value->service_details))}}


                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="/deleteProduct/{{ $value->id }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn btn-sm" style="background: #48887b;color:aliceblue">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            </div>

        </div>
        <!-- /.card-body -->

            <!-- /.row -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->










  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Consultation</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('service_details_collection') }}" enctype="multipart/form-data">
            @csrf


            <?php
                $category_details= Illuminate\Support\Facades\DB::table('service_categories')
                ->where('category','Data Outsourcing')->value('category');
            ?>
            <input type="hidden" name="category" value="{{ $category_details }}">

            <div class="form-group">
                <label for="title">Project Title</label>
                <input id="project_title" type="text" name="project_title"  required class="form-control @error('project_title') is-invalid @enderror"/>
                @error('project_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="uploads">Uploads</label>
                <input id="uploads" type="file" name="file"  required class="form-control @error('title') is-invalid @enderror"/>
                @error('uploads')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="form-group">
                <label>Fill Details here</label>
                <textarea  name="service" rows="4" cols="20" maxlength="200" class="form-control" required>
                </textarea>
            </div>


            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn" style="background:#48887b; color:whitesmoke">Create Project</button>
              </div>
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


@endsection
