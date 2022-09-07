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
            <h1>Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

            <!-- Profile Image -->
            <div class="card card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <img src="{{ asset('assets/img/Frame_47768.png') }}"/>
                </div>

                <p class="text-muted text-center"></p>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
          <div class="col-md-10">
            <div class="card">
              <div class="card-header p-2">
                <p class=".makePayment">
                    Make Payment
                </p>
              </div><!-- /.card-header -->

              <div class="card-body">

                <h4>Transfer To</h4>

               <div class="row">
                <div class="col-md-3">
                    <p class="p-4" style="font-family: 'Inter';font-style: normal;font-weight: 500;
                    font-size: 16px;line-height: 120%;">Single Account</p>

                </div>
                <div class="col-md-3 offset-6 float-right">
                </div>
               </div>

                <!--input-details-->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="background-color:#48887b; color:aliceblue">
                                Payment Details
                            </div>
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-stretch" >
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title mb-4">
                                                <i class="fas fa-landmark mr-2" style="font-size:48px;color:#48887b"></i>
                                                Kuda Microfinance Bank</h3>
                                            <p class="card-text">
                                                
                                                Account No.: 2015263203 <br/> 
                                                Account Name: Augustine Bolaji Samson
                                            </p>
                                        </div>
                                    </div>    
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title mb-4">
                                                <i class="fas fa-pound-sign mr-2" style="font-size:48px;color:#48887b"></i>
                                                Llyods bank</h3>
                                            <p class="card-text">
                                                Account No.: 15521263 <br/>
                                                sortcode  .: 309691 <br/>
                                                Account Name:Ukap Damilola
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       

                            
                        </div>
                      
                    </div>

                   

                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-header" style="background-color:#48887b; color:aliceblue">
                                Wallet 
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-4" ><i class="fas fa-wallet mr-2" style="font-size:48px;color:#48887b"></i>
                                    USDT
                                </h5>
                                <p class="card-text">
                                        <button data-toggle="modal" data-target="#ERC20" class="rounded-2" style="background-color:#48887b; color:aliceblue">ERC20</button>
                                        <button data-toggle="modal" data-target="#BEP20" class="roubded-2" style="background-color:#48887b; color:aliceblue">BEP20</button>
                                        <button data-toggle="modal" data-target="#BEP2" class="rounded-2" style="background-color:#48887b; color:aliceblue">BEP2</button>
                                        <button data-toggle="modal" data-target="#TRC20" class="rounded-2" style="background-color:#48887b; color:aliceblue">TRC20</button>
                                        
                                        <button data-toggle="modal" data-target="#Usdtmemo" class="rounded-2 mt-3" style="background-color:#48887b; color:aliceblue">UsdtMemo</button>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!--end input details--->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->


      <div class="card">
        <div class="card-header" style="background-color:#48887b; color:aliceblue">
            Payment Details
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Price</th>
                        <th>Paid Amount</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php 
                    $auth=Auth::user()->id;
                    $service_project=Illuminate\Support\Facades\DB::table('service_details')
                                    ->where('user_id',$auth)
                                    ->get();
                ?>

                <tbody>
                    @foreach ($service_project as $service)
                    <tr>
                        <td>
                            {{ $service->project_id }}
                        </td>
                        <td>{{$service->price  }}</td>
                        <td>{{ $service->amount_paid }}</td>
                        <td>
                            <?php 
                                if($service->price == $service->amount_paid){
                                    echo "payment completed"; 
                                }else{
                                    $sum =$service->price - $service->amount_paid;
                                    $double=.00;
                                    echo $sum.$double;
                                }
                              
                                ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-block" style="background-color:#48887b; color:aliceblue">View Project</a>
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



   {{-- wallet --}}
   <!-- Button trigger modal -->

  
  <!--Erc20 Modal -->
  <div class="modal fade" id="ERC20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ERC20</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h2>You can scan the bar below</h2>
           <div class="mb-4 float-left">
            {!! QrCode::size(200)
                ->generate('0x01e64f11bc7f5c02a12066ec890fbab7926727af')
                 !!}
           </div>

           <div id="select_txt" class="float-right">
                <p class="mb-4">0x01e64f11bc7f5c02a12066ec890fbab7926727af</p>
           </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
          <button type="submit" class="btn btn-danger" onclick="copy_data(select_txt)">Copy</button>
        </div>
      </div>
    </div>
  </div>

  {{-- BEP20 --}}

  <div class="modal fade" id="BEP20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BEP20</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h2>You can scan the bar below</h2>
            <div class="mb-4 float-left">
                {!! QrCode::size(200)
                    ->generate('0x01e64f11bc7f5c02a12066ec890fbab7926727af')
                     !!}
               </div>
    
               <div id="select_txt" class="float-right">
                    <p class="mb-4">0x01e64f11bc7f5c02a12066ec890fbab7926727af</p>
                     <button type="submit" class="btn btn-danger" onclick="copy_data(select_txt)">Copy</button>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
          
        </div>
      </div>
    </div>
  </div>

 {{-- BEP2 --}}
  <div class="modal fade" id="BEP2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BEP2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h2>You can scan the bar below</h2>
            <div class="mb-4 float-left">
                {!! QrCode::size(200)
                    ->generate('bnb136ns6lfw4zs5hg4n85vdthaad7hq5m4gtkgf23')
                     !!}
               </div>
    
               <div id="BEP2" class="float-right">
                    <p class="mb-4">bnb136ns6lfw4zs5hg4n85vdthaad7hq5m4gtkgf23</p>
               </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
          
        </div>
      </div>
    </div>
  </div>

  {{-- TRC20 --}}
  <div class="modal fade" id="TRC20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">BEP2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h2>You can scan the bar below</h2>
            <div class="mb-4 float-left">
                {!! QrCode::size(200)
                    ->generate('TLTbra7XZALwTcgJoP2fAUVWjRjh6jdVdo')
                     !!}
               </div>
    
               <div id="TRC20" class="float-right">
                    <p class="mb-4">TLTbra7XZALwTcgJoP2fAUVWjRjh6jdVdo</p>
               </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
          
        </div>
      </div>
    </div>
  </div>


   {{-- Usdtmemo --}}
   <div class="modal fade" id="Usdtmemo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">UsdtMemo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h2>You can scan the bar below</h2>
            <div class="mb-4 float-left">
                {!! QrCode::size(200)
                    ->generate('109540381')
                     !!}
               </div>
    
               <div id="Usdtmemo" class="float-right">
                    <p class="mb-4">109540381</p>
               </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
          
        </div>
      </div>
    </div>
  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    function copy_data(containerid) {
          var range = document.createRange();
          range.selectNode(containerid); //changed here
          window.getSelection().removeAllRanges();
          window.getSelection().addRange(range);
          document.execCommand("copy");
          window.getSelection().removeAllRanges();
        
          toastr.success('Wallet Address copied', "", {"iconClass": 'customer-info'});
      }
    </script>

@endsection



