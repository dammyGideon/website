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
            <h1>Services</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="" class="btn btn-dark" data-toggle="modal" data-target="#modal-default">Add Services</a>

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
            <h3 class="card-title" style="color:white">Create Service</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          @php
          $services=Illuminate\Support\Facades\DB::table('services')->get();
         @endphp

          <div class="card-body">
            <div class="row">
                <div class="col-md-12">


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>short Descriptions</th>
                            <th>Action</th>

                          </tr>
                        </thead>

                        <tbody id="form">
                            @foreach ($services as $service )

                           <tr>


                            <td>{{ $service->id}}</td>
                            <td>{{ $service->short_description}}</td>
                            <td>
                                <a href="/service_create/{{ $service->id}}"
                                  class="btn"style="background-color:#48887b;color:floralwhite">
                                  Edit
                                </a>
                                <a href="/service_create/{{ $service->id}}" class="btn
                                  btn-danger
                                  " style="color: white">Delete</a>

                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>


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






  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Services</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" enctype="multipart/form-data" action="{{ asset('service_create') }}">
            @csrf
            @php
            $categories=Illuminate\Support\Facades\DB::table('service_categories')->get();
           @endphp

            <div class="form-group">


               <select class="form-control" name="category" required>
                <option></option>
                @foreach ($categories as $service )
                    <option value="{{ $service->category }}">{{ $service->category }}</option>
                @endforeach
               </select>
            </div>

            <div class="form-group">
                <label>Short Description</label>
                <textarea  name="shortDP"rows="3" class="form-control" style="height: 100px" required>
                </textarea>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea id="compose-textarea" name="longDP"rows="3" class="form-control" style="height: 100px" required>
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
