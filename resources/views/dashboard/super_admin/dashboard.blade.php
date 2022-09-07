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
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>



                <div class="info-box-content">

                  <span class="info-box-text">Admins</span>
                  <span class="info-box-number">
                    {{ $admin }}
                    <small>%</small>
                  </span>

                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Task</span>
                  <span class="info-box-number">{{ $task }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Projects</span>
                  <span class="info-box-number">{{ $project }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Users</span>
                  <span class="info-box-number">{{ $users }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        <div class="row">


          <div class="col-md-12">
            <div class="card">
                <div class="card-header" style=
                "background:#48887b;color:#ffffff">
                  <h3 class="card-title">Projects Waiting For Approval</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th>Project Id</th>
                              <th>Team Members</th>
                              <th>Project Status</th>
                              <th>Action</th>
                          </tr>

                      </thead>
                      @php
                          $service=Illuminate\Support\Facades\DB::table('service_details')->get();

                     @endphp
                      <tbody>
                        @foreach ($service as $new_service )
                        <?php
                        $response=Illuminate\Support\Facades\DB::table('service_categories')
                        ->where('id',$new_service->category_id)
                        ->get();
                         foreach($response as $res){

                         }
                         ?>
                        <tr>
                            <td>{{ $new_service->project_id }}</td>
                            <td>
                                {{$res->category }}
                            </td>
                            <td>{{ $new_service->status }}</td>
                            <td>
                                <button class="btn bg-dark">View Project</button>
                                <button class="btn bg-danger">Send Invoice</button>
                                <button class="btn" style=
                                "background:#48887b;color:#ffffff">Assign to group</button>
                            </td>

                            {{-- {{ $new_service->uploads }} --}}
                        </tr>




                        @endforeach
                      </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>


            <!-- /.col -->

              </div><!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>




@endsection
