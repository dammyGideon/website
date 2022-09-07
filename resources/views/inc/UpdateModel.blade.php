<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Profile</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
              @foreach ($profile as $users_profile)

             <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <form method="POST" action="{{route('update.profile')}}">
                        @csrf
                        <div class="form-group" >
                            <label for="first_name">First Name</label>
                            <input class="form-control"
                            type="text" name="first_name"  value="{{$users_profile->first_name }}" />
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" value="{{ $users_profile->last_name }}" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $users_profile->email }}"  class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" value="{{ $users_profile->phone }}"  class="form-control"/>
                        </div>


                </div>
                <div class="col-md-3"></div>

             </div>


              @endforeach
          </p>
        </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn" style="background:#48887b;color:#ffffff" >Update profile</button>
            </div>

         </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
