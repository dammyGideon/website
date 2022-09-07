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
            <h1>List of Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admins</li>

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
                        Add New Admin
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
                                <a href="/edit_admin/{{$user->id}}"
                                  class="btn"style="background-color:#48887b;color:floralwhite">
                                  Edit
                                </a>
                                <a href="/delete_admin/{{$user->id}}" class="btn
                                  btn-danger
                                  " style="color: white">Delete</a>
                                <a href="/task/{{$user->id}}" class="btn
                                  sidebar-dark-primary
                                  " style="color: white">Add task</a>
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
                <form method="POST" action="{{ asset('/add_admin') }}" role="form"  enctype="multipart/form-data">
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
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
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



@endsection
