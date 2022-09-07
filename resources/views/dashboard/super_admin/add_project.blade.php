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
            <h1>Data Collection</h1>
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
            <h3 class="card-title" style="color:white"> Data Collection</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">

            <div class="card-body">
                  <!-- Default box -->

            <div class="card card-solid">
                <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">




                    

                    <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch">

                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                            </div>



                                       


                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="" class="btn btn-sm" style="background: #48887b;color:aliceblue">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    
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










 

@endsection
