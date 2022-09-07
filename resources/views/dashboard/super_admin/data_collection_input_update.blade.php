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
              <li class="breadcrumb-item"><a href="{{asset('/dashboard') }}">Service</a></li>
              <li class="breadcrumb-item active">Data Collection</li>
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
            <h3 class="card-title" style="color:white">Data Analytics</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">

              <div class="col-md-12">
               @foreach ($response as $item)
               <form action="">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">HeadLine</label>
                        <input type="text" name="list_of_variables"
                         class="form-control" id="exampleInputEmail1"
                         value="{{ $item->title }}">
                      </div>

                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="textarea" style="width: 100%;">
                        {{ $item->details }}
                        </textarea>
                     </div>


                </div>
               </form>
               @endforeach
              </div>
              <div class="col-12"><hr/>

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





@endsection
