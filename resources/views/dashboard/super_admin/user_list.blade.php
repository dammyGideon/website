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
            <h1>List of User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>

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
                    Add New User
                  </a>
                  </h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="card-body table-responsive p-0">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Frist Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($payload as $user)
                              <tr>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    <a href="/edit_list/{{$user->id}}"
                                      class="btn"style="background-color:#48887b;color:floralwhite">
                                      Edit
                                    </a>
                                    <a href="/delete_user/{{ $user->id }}" class="btn
                                      btn-danger
                                      " style="color: white">Delete</a>

                                      <a href="#" data-toggle="modal" data-target="#add-project"
                                          class="btn sidebar-dark-primary
                                          " style="color: white">
                                           Add Project
                                        </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>

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



  {{-- modal for edit --}}



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
                <form method="POST" action="{{ asset('/user_list') }}" role="form"  enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Upload Picture/label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
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






  {{-- add project model --}}

  <div class="modal fade" id="add-project">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Data Collection</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('service_details_collection') }}" enctype="multipart/form-data">
            @csrf


            <input type="hidden" name="category" value="">
            <div class="form-group">
                <label for="uploads">Uploads</label>
                <input id="uploads" type="file" name="file"  required class="form-control @error('title') is-invalid @enderror"/>
                @error('uploads')
                    <div class="alert alert-danger"></div>
                @enderror

            </div>

            <?php
                $category_details= Illuminate\Support\Facades\DB::table('service_categories')->pluck('category');
            ?>

            <div class="form-group">
                <select class="form-control">
                    <option></option>
                    @foreach ($category_details  as $category)
                    <option>{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            

            <div class="form-group">
                <label>Fill Details here</label>
                <textarea id="compose-textarea" name="service" rows="4" cols="20" maxlength="200" class="form-control" required>
                </textarea>
            </div>


            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn" style="background:#48887b; color:whitesmoke">Save changes</button>
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
