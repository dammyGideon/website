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
            <h1>Update Users Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Details</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                 <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-6">
                        {{-- Form --}}
                        @foreach ($response as $user )


                        <form action = "/edit_list/{{$user->id}}" method = "post" class="form-horizontal">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <div class="card-body">
                              <div class="form-group row">
                                <label for="first_name" class="col-sm-6 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                  <input type="text"
                                   name="first_name" value="{{ $user->first_name }}"
                                    class="form-control" id="first_name" placeholder="Frist Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="last_name" class="col-sm-6 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                  <input type="text"
                                  name="last_name" value="{{ $user->last_name }}"
                                  class="form-control" id="last_name" placeholder="Last Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-sm-6 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                  <input type="email" value="{{$user->email }}"
                                   name="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="phone" class="col-sm-6 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                  <input type="number" value="{{ $user->phone }}"
                                  name="phone" class="form-control" id="phone" placeholder="Phone Number">
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn"
                                style="background-color:#48887b;color:floralwhite">
                              Register</button>
                            </div>
                            <!-- /.card-footer -->
                          </form>

                          @endforeach
                     </div>
                     <div class="col-md-3"></div>
                 </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@endsection
