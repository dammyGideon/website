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
            <h1>List of Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Team</li>

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
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                      <a href="" class="btn" data-toggle="modal" data-target="#modal-default"
                        style="background-color:#48887b;color:floralwhite">
                        Add New Team
                      </a>
                  </h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                @if(session()->has('message'))
                <div class="alert" style="background: #48887b; color:aliceblue">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="card-body table-responsive p-0">

                    <div class="card-body">
                          <!-- Default box -->

                    <div class="card card-solid">
                        <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            @foreach ($response as $team)


                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                {{ $team->position }}
                                </div>
                                <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                    <h2 class="lead"><b>{{ $team->name }}</b></h2>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>LinkedIn:{{ $team->linkedIn }}</li>
                                    </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="team/{{ $team->image }}" alt="" class="img-circle img-fluid">
                                    </div>
                                </div>
                                </div>
                                <div class="card-footer">
                                <div class="text-right">
                                    <a href="/delete_team/{{ $team->id }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="/update_team/{{ $team->id }}" class="btn btn-sm" style="background: #48887b;color:aliceblue">
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
              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Admin Registration</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- form start -->
                <form method="POST" action="{{ asset('/team_registration') }}" role="form"  enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" class="form-control" placeholder="Position">
                    </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">linkedIn</label>
                        <input type="text" name="linkedIn" class="form-control" id="exampleInputEmail1" placeholder="phone number">
                      </div>


                      <div class="form-group">
                        <label>Personal Details</label>
                        <textarea id="compose-textarea" name="personal_details" rows="4" cols="50" maxlength="400" class="form-control" required>
                        </textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Team Picture</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn"
                    style="background: #48887b; color:floralwhite"
                    >Save changes</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

              <!-- Form Element sizes -->
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



@endsection
