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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline"  style="color:#48887b">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('assets/img/'.Auth::user()->avatar) }}"
                       alt="User profile picture">
                </div>


                <h3 class="profile-username text-center">
                    {{ Auth::user()->first_name}}
                    {{-- {{ Auth::user()->last_name }} --}}
                </h3>

                <p class="text-muted text-center"></p>

                <form action="{{ route('profile.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" id="myFile" name="avater">
                    <br/><br/>
                    <button type="submit" class="form-control" style="background-color:#48887b">
                        <span style="color: #ffffff">Upload Picture</span>
                    </button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                      <a class="nav-link active" href="#activity" data-toggle="tab" style="background-color:#48887b">Users Profile Details</a></li>
                </ul>
              </div><!-- /.card-header -->

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <table class="table table-striped">

                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last  Name</th>
                            <th>Email</th>
                            <th>Phone number</th>
                        </tr>
                    </thead>

                    <tbody>
                    <tr>

                        @foreach ($profile as $users_profile )
                        <td>{{ $users_profile->first_name }}</td>
                        <td>{{ $users_profile->last_name }}</td>
                        <td>{{ $users_profile->email }}</td>
                        <td>{{ $users_profile->phone }}</td>

                        <td><a
                            href="#"
                             class="btn"
                             data-toggle="modal" data-target="#modal-default"
                             style=
                             "background:#48887b;color:#ffffff">Update Profile
                        </td>
                        @endforeach

                    </tr>

                    </tbody>

                    </table>



                    <div>
                    <!-- Post -->
                    <div class="post clearfix"></div>



                  </div>
                </div>

              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

      <div class="card">
        <div class="card-header"  style=
        "background:#48887b;color:#ffffff">
            Services booked for
        </div>

        <div class="card-body">
           <table  class="table table-striped">

                <thead>
                    <tr>
                        <th>Project Title</th>
                        <th>Project Category</th>
                        <th>Project Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($service_project as $service)
                    <?php
                         $project=Illuminate\Support\Facades\DB::table('service_categories')
                                    ->where('id',$service->category_id)
                                    ->value('category');
                    ?>
                    <tr>

                        <td>{{ $service->project_id }}</td>
                        <td>{{ $project }}</td>
                        <td>{{ $service->project_status }}</td>

                        <td>
                           @php
                            if($service->status =='pending'){
                                echo '<a href="/payment" class="btn btn-block bg-danger">
                                Pay</a>';
                            }else {
                                echo'
                                <a href="" class="btn btn-block bg-danger">view</a>';

                            }
                            @endphp
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>

  {{ $service_project->links() }}
  
@include('inc.UpdateModel')
@endsection
