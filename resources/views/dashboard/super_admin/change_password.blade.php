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
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Settings</li>

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
                        <form  method="POST" action=""  class="form-horizontal">
                            @csrf
                            <div class="card-body">
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-6 col-form-label">old password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Old password">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-6 col-form-label"> new Password</label>
                                <div class="col-sm-10">
                                  <input type="password" name="confirm_password" class="form-control" id="inputPassword3" placeholder="New Password">
                                </div>
                              </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                              <button type="submit" class="btn"
                                style="background-color:#48887b;color:floralwhite">
                              Sign in</button>
                            </div>
                            <!-- /.card-footer -->
                          </form>
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
