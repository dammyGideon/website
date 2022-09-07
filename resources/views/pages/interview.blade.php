@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <section class="container">

           <div class="row">
               <div class="col-md-3"></div>

               <div class="col-md-6 mt-4">

                   <img class="mx-auto d-block" src="{{asset('assets/img/dglogo2.png')}}" style="height: 200px; width: 300px">
                   <form method="post" action="{{route('pages.interview.store')}}">
                       @csrf
                        <!--Email--->
                       <div class="card card-primary card-outline" id="card_1">
                           <div class="card-header" style="background: #48887b">
                               <h6 class="card-title" style="color: whitesmoke">Email</h6>
                           </div> <!-- /.card-body -->
                           <div class="card-body">
                               <div class="form-group">
                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                       </div>
                                       <input type="email" name="email" class="form-control" placeholder="Email" required>
                                   </div>

                               </div>

                           </div><!-- /.card-body -->
                       </div>

                        <a href="#" id="email" class="btn mt-4" style="background-color: #48887b;color: whitesmoke">Next</a>

                       <div id="card_2">
                           <div class="card card-primary card-outline mt-4">
                               <div class="card-header" style="background: #48887b">
                                   <h6 class="card-title" style="color: whitesmoke">Personal Information</h6>
                               </div> <!-- /.card-body -->
                               <div class="card-body">

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                                       </div>
                                       <input type="text" name="full_name" class="form-control" placeholder="Full Name( First name, middle name and surname)" required>
                                   </div>

                               </div><!-- /.card-body -->
                           </div>



                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>Gender * </label>
                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="gender" value="male" id="exampleRadios1" value="option1" checked>
                                       <label class="form-check-label" for="exampleRadios1">
                                           Male
                                       </label>
                                   </div>
                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="gender" value="female" id="exampleRadios2" value="option2">
                                       <label class="form-check-label" for="exampleRadios2">Female
                                       </label>
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>Date of Birth * </label>

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                                       </div>
                                       <input type="date" class="form-control" name="dob" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>Address *</label>

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="address" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                         <div id="hide_details">
                             <a href="#" id="details" class="btn mt-4" style="background-color: #48887b;color: whitesmoke">Back</a>
                             <a href="#" id="detail_next" class="btn mt-4" style="background-color: #48887b;color: whitesmoke">Next</a>
                         </div>

                       </div>



                       <!--Education Information-->
                       <div id="Education">
                           <div class="card card-primary card-outline mt-4">
                               <div class="card-header" style="background: #48887b">
                                   <h6 class="card-title" style="color: whitesmoke">Education Information</h6>
                               </div> <!-- /.card-body -->
                               <div class="card-body">
                                    <label>What year are you currently in school? *</label>

                                   <div class="form-check mt-4">
                                       <input class="form-check-input" type="radio" name="year" value="Penultimate Year" id="exampleRadios1"  checked>
                                       <label class="form-check-label" for="exampleRadios1">
                                           Penultimate Year
                                       </label>
                                   </div>

                                   <div class="form-check">
                                       <input class="form-check-input" type="radio" name="year" value="Final Year" id="exampleRadios1" checked>
                                       <label class="form-check-label" for="exampleRadios1">
                                           Final Year
                                       </label>
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>What is your institution name?</label>

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="institution" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>What course are you currently studying?</label>

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-book"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="course" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>


                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>
                                       What is your current CGPA?
                                       *
                                       <br/>
                                      <b>
                                          Please note that this will be verified if you are among the shortlisted candidate
                                      </b>

                                   </label>

                                   <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                           <span class="input-group-text"><i class="fas fa-book"></i></span>
                                       </div>
                                       <input type="text" class="form-control" name="CGPA" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>


                           <div id="Education_button">
                               <a href="#" id="Education_back" class="btn mt-4" style="background-color: #48887b;color: whitesmoke">Back</a>
                               <a href="#" id="Education_next" class="btn mt-4" style="background-color: #48887b;color: whitesmoke">Next</a>
                           </div>

                       </div>


                       <!--Level of proficiency-->
                       <div id="proficiency">
                           <div class="card card-primary card-outline mt-4">
                               <div class="card-header" style="background: #48887b">
                                   <h6 class="card-title" style="color: whitesmoke">
                                       Level of proficiency
                                   </h6>
                               </div> <!-- /.card-body -->
                               <div class="card-body">
                                   <label>
                                       <b>On a scale of 1 to 5, rate your level of competency in each of these skills?
                                       </b> <span style="color:red; font-size: 30px;">*</span></label>
                                   <!--! first row-->
                                 <div class="row" id="first_row">

                                     <div class="col-md-3">
                                        <label></label>
                                         <p>
                                             Understanding of statistics
                                         </p>
                                     </div>


                                     <div class="col-md-2">
                                         <label>1</label>
                                         <div class="form-check mt-4">
                                             <input class="form-check-input" type="radio" name="statistics" value="1" id="statistics" checked>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <label>2</label>
                                         <div class="form-check mt-4">
                                             <input class="form-check-input" type="radio" name="statistics" value="2" id="statistics" checked>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <label>3</label>
                                         <div class="form-check mt-4">
                                             <input class="form-check-input" type="radio" name="statistics" value="3" id="statistics" checked>
                                         </div>
                                     </div>
                                     <div class="col-md-2">
                                         <label>4</label>
                                         <div class="form-check mt-4">
                                             <input class="form-check-input" type="radio" name="statistics" value="4" id="statistics" checked>
                                         </div>
                                     </div>

                                     <div class="col-md-1">
                                         <label>5</label>

                                         <div class="form-check mt-4">
                                             <input class="form-check-input" type="radio" name="statistics" value="5" id="statistics" checked>
                                         </div>
                                     </div>

                                 </div>
                                    <!--end of first row -->

                                   <!--! second row-->
                                   <div class="row" id="second_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Quantitative Reasoning
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="quantitative" value="1" id="quantitative" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="quantitative" value="2" id="quantitative"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="quantitative" value="3" id="quantitative"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="quantitative" value="4" id="quantitative" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="quantitative" value="5" id="quantitative" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! second row ends-->


                                   <!--! third row-->
                                   <div class="row" id="third_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Project Management Skills
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="skills" value="1" id="skills" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="skills" value="2" id="skills"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="skills" value="3" id="skills"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="skills" value="4" id="skills" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="skills" value="5" id="skills" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! third row ends-->

                                   <!--! fourth row-->
                                   <div class="row" id="fourth_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Understanding of mathematics
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="mathematics" value="1" id="mathematics" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="mathematics" value="2" id="mathematics"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="mathematics" value="3" id="mathematics"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="mathematics" value="4" id="mathematics" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="mathematics" value="5" id="mathematics" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! fourth row-->

                                   <!--! fifth row-->
                                   <div class="row" id="fifth_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Analytical Reasoning
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="reasoning" value="1" id="reasoning" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="reasoning" value="2" id="reasoning"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="reasoning" value="3" id="reasoning"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="reasoning" value="4" id="reasoning" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="reasoning" value="5" id="Reasoning"  checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! fifth row-->

                                   <!--! 6th row-->
                                   <div class="row" id="6th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Creative Writing
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="writing" value="1" id="writing" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="writing" value="2" id="writing"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="writing" value="3" id="writing" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="writing" value="4" id="writing" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="writing" value="5" id="writing" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 6th row-->

                                   <!--! 7th row-->
                                   <div class="row" id="7th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Problem Solving Skills

                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="problem" value="1" id="problem" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="problem" value="2" id="problem"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="problem" value="3" id="problem"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="problem" value="4" id="problem" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="problem" value="5" id="problem" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 7th row-->


                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Data Visualization Skills
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="visualization" value="1" id="visualization" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="visualization" value="2" id="visualization"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="visualization" value="3" id="visualization"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="visualization" value="4" id="visualization" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="visualization" value="5" id="visualization" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 8th row-->


                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>On a scale of 1 to 5 rate your level of proficiency in each of these soft skills
                                       <span style="color:red; font-size: 30px;">*</span></label>


                                     <!--! first row-->
                                   <div class="row" id="first_row" style="padding: 4px;">

                                       <div class="col-md-3">
                                           <label></label>
                                       </div>

                                       <div class="col-md-2">
                                           <label>1</label>
                                       </div>
                                       <div class="col-md-2">
                                           <label>2</label>
                                       </div>
                                       <div class="col-md-2">
                                           <label>3</label>

                                       </div>
                                       <div class="col-md-2">
                                           <label>4</label>
                                       </div>
                                       <div class="col-md-1">
                                           <label>5</label>
                                       </div>

                                   </div>
                                   <!--end of first row -->


                                   <!--! first row-->
                                   <div class="row" id="first_row" style="padding: 4px;">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Attention to details
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="details" value="1" id="statistics" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">

                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="details" value="2" id="statistics"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">

                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="details" value="3" id="statistics"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">

                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="details" value="4" id="statistics" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">


                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="details" value="5" id="statistics" value="statistics" checked>
                                           </div>
                                       </div>

                                   </div>
                                   <!--end of first row -->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Communication Skills (written and oral)
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="communication" value="1" id="communication" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="communication" value="2" id="communication"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="communication" value="3" id="communication"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="communication" value="4" id="communication" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="communication" value="5" id="communication" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 8th row-->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Persuasiveness
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="persuasiveness" value="1" id="persuasiveness" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="persuasiveness" value="2" id="persuasiveness"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="persuasiveness" value="3" id="persuasiveness"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="persuasiveness" value="4" id="persuasiveness" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="persuasiveness" value="5" id="persuasiveness" checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 8th row-->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               Curiosity
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Curiosity" value="1" id="Curiosity" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Curiosity" value="2" id="Curiosity"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Curiosity" value="3" id="Curiosity"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Curiosity" value="4" id="Curiosity" checked>
                                           </div>
                                       </div>

                                       <div class="col-md-1">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Curiosity" value="5" id="Curiosity"  checked>
                                           </div>
                                       </div>

                                   </div >
                                   <!--! 8th row-->





                               </div><!-- /.card-body -->
                           </div>


                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>What is your level of proficiency with each of these tools?

                                       <span style="color:red; font-size: 30px;">*</span></label>

                                   <!--! first row-->
                                   <div class="row" id="first_row" style="padding: 4px;">

                                       <div class="col-md-3">

                                       </div>


                                       <div class="col-md-2">
                                           <label>Beginner</label>


                                       </div>
                                       <div class="col-md-2">
                                           <label>Intermediate</label>
                                       </div>
                                       <div class="col-md-2">
                                           <label>Advanced</label>

                                       </div>
                                       <div class="col-md-2">
                                           <label>No Idea</label>
                                       </div>



                                   </div>
                                   <!--end of first row -->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               MS Excel
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Excel" value="Beginner" id="MS_Excel" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Excel" value="Intermediate" id="MS_Excel"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Excel" value="Advanced" id="MS_Excel"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Excel" value="No_Idea" id="MS_Excel" checked>
                                           </div>
                                       </div>



                                   </div >
                                   <!--! 8th row-->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               MS Powerpoint
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Powerpoint" value="Beginner" id="Powerpoint" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Powerpoint" value="Intermediate" id="Powerpoint"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Powerpoint" value="Advanced" id="Powerpoint"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="Powerpoint" value="No_Idea" id="Powerpoint" checked>
                                           </div>
                                       </div>




                                   </div >
                                   <!--! 8th row-->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               MS Word
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Word" value="Beginner" id="MS_Word" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Word" value="Intermediate" id="MS_Word"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Word" value="Advanced" id="MS_Word"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="MS_Word" value="No_Idea" id="MS_Word" checked>
                                           </div>
                                       </div>





                                   </div >
                                   <!--! 8th row-->

                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               SPSS
                                           </p>
                                       </div>

                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="spss" value="Beginner" id="spss" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="spss" value="Intermediate" id="spss"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="spss" value="Advanced" id="spss"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="spss" value="No_Idea" id="spss" checked>
                                           </div>
                                       </div>


                                   </div >
                                   <!--! 8th row-->
                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               STATA
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="stata" value="Beginner" id="stata" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="stata" value="Intermediate" id="stata"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="stata" value="Advanced" id="stata"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="stata" value="No_Idea" id="stata" checked>
                                           </div>
                                       </div>


                                   </div >
                                   <!--! 8th row-->
                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               EVIEWS
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="EVIEWS" value="Beginner" id="EVIEWS" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="EVIEWS" value="Intermediate" id="EVIEWS"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="EVIEWS" value="Advanced" id="EVIEWS"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="EVIEWS" value="No_Idea" id="EVIEWS" checked>
                                           </div>
                                       </div>



                                   </div >
                                   <!--! 8th row-->
                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               R
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="R" value="Beginner" id="R" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="R" value="Intermediate" id="R"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="R" value="Advanced" id="R"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="R" value="No_Idea" id="R" checked>
                                           </div>
                                       </div>



                                   </div >
                                   <!--! 8th row-->
                                   <!--! 8th row-->
                                   <div class="row" id="8th_row">

                                       <div class="col-md-3">
                                           <label></label>
                                           <p>
                                               SQL
                                           </p>
                                       </div>


                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="SQL" value="Beginner" id="SQL" checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="SQL" value="Intermediate" id="SQL"checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="SQL" value="Advanced" id="SQL"  checked>
                                           </div>
                                       </div>
                                       <div class="col-md-2">
                                           <div class="form-check mt-4">
                                               <input class="form-check-input" type="radio" name="SQL" value="No_Idea" id="SQL" checked>
                                           </div>
                                       </div>



                                   </div >
                                   <!--! 8th row-->




                               </div><!-- /.card-body -->
                           </div>

                           <div class="card mt-4">

                               <div class="card-body">
                                   <label>
                                       What are your expectations
                                       from this program (Response must be at least 100 words)?
                                       <span style="font-size: 30px; color:red">*</span>

                                   </label>

                                   <div class="input-group mb-3">

                                       <input type="text" class="form-control" name="expectations" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->



                               <div class="card-body">
                                   <label>
                                       What do you see your self doing in the next five
                                       years and how can this program contribute to
                                       that?(response must be at least 500 words)
                                       <span style="font-size: 30px; color:red">*</span>

                                   </label>

                                   <div class="input-group mb-3">

                                       <input type="text" class="form-control" name="contribute" style="width: 20px;">
                                   </div>

                               </div><!-- /.card-body -->
                           </div>

                           <div id="">
                               <a href="#" id="bank_proficiency" class="btn mt-4" style="background: whitesmoke; color:#48887b">Back</a>
                               <button class="btn mt-4" style="background-color: #48887b;color: whitesmoke">
                                   Submit
                               </button>

                           </div>


                       </div>


                   </form>

               </div>


               <div class="col-md-3"></div>
           </div>

    </section>
    <!-- /.content -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $('#card_2').hide();
        $('#Education').hide();
        $('#proficiency').hide();



        $("#email").on('click', function (){
            $("#card_1").hide();
            $("#email").hide();
            $("#card_2").show();
            $('#proficiency').hide();
        });

        $('#details').on('click',function (){
            $("#email").show();
            $("#card_1").show();
            $('#card_2').hide();
            $('#proficiency').hide();
        });

        $('#hide_details').on('click',function (){
            $('#card_2').hide();
            $('#hide_details').hide();
            $('#Education').show();
            $('edu_detail_next').show();
            $('edu_details_back').show();


        });

        $('#edu_details_back').on('click',function (){
            $('#card_2').show();
            $('#hide_details').show()
            $('#Education').hide();

        });

        $('#edu_detail_next').on('click', function (){
            $("#email").hide();
            $("#card_1").hide();
            $('#card_2').hide();
            $('#hide_details').hide();
            $('#Education').hide();
        })

        $('#Education_next').on('click',function(){
            $('#proficiency').show();
            $('#Education').hide();
        })

        $("#bank_proficiency").on('click',function(){
            $('#proficiency').hide();
            $('#Education').show();
        })

    })
</script>

@endsection
