@extends('layouts.dashboard')

@section('content')
@include('inc.superDashboardNav')



 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="mb-2 row">
          <div class="col-sm-6">
            <h1>Current Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

              <a href="#" class="btn" style="background-color:#48887b;color:floralwhite"
                data-toggle="modal" data-target="#modal-default">
                Add Current Finished Project
              </a>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Project Done</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                @php
                    $project=Illuminate\Support\Facades\DB::table('current_projects')->get();
                @endphp


                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Project image</th>
                        <th>short Description</th>

                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($project as $current_project )
                        @php
                            $upload=$current_project->project_image;
                        @endphp
                       <tr>

                        <td><img src="{{ asset('project/'.$upload)}}" height="50" width="50"></td>
                        <td>{{ $current_project->short_description}}</td>
                        <td>
                            <a href="/edit_admin/{{ $current_project->id}}"
                              class="btn"style="background-color:#48887b;color:floralwhite">
                              Edit
                            </a>
                            <a href="/delete_current_project/{{ $current_project->id}}" class="btn
                              btn-danger
                              " style="color: white">Delete</a>

                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Current Finished Project</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST"enctype="multipart/form-data" action="{{ asset('current_project') }}">
            @csrf
            <div class="form-group">
                <label for=""></label>
                <input type="file" class="form-control" name="upload"/>
            </div>

            <div class="form-group">
                <label>Short Description</label>
                <textarea  name="shortDP"rows="3" class="form-control" style="height: 100px">
                </textarea>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea id="compose-textarea" name="longDP"rows="3" class="form-control" style="height: 100px">
                </textarea>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn"
                style="background-color:#48887b;color:floralwhite"
                >
                    Save changes</button>
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
