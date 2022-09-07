 @extends('layouts.chat')
 @section('content')
      <style>
          body{
              background-image: url('/../assets/img/chat.jpg');
              text-rendering: optimizeLegibility;
              -webkit-font-smoothing: antialiased;
              -moz-osx-font-smoothing: grayscale
          }
          .container{
              margin: 60px auto;
              background: #fff;
              padding: 0;
              border-radius: 2px;
          }
          .profile-image{
              width: 50px;
              height: 50px;
              border-radius:25px;
          }
          .settings-trey{
              background:#c5c5c5;
              padding:15px 25px;
              border-radius:7px;
          }

          .settings-trey i{
              margin-top:10px;
              margin-left:14px;
              color:black;
              font-size:25px;
              transition: .3s
          }
          .settings-trey i:hover{
              color:#48887b;
              cursor: pointer;
          }

          .search-box{
              background:#fafafa;
              padding: 10px 13px;
          }
.search-box .input-wrapper{
    background: #fff;
    border-radius: 40px;

}
.search-box .input-wrapper i{

    color: grey;
    vertical-align: middle;
    margin-left: 7px;
}
input{
    border: none;
    border-radius: 40px;
    width: 80%;
}
input ::placeholder {
    color: #e3e3e3;
    font-weight: 300;
}
input :focus{
    outline: none;
}

.friend-drawer{
    padding: 10px 15px;
    display: flex;
    vertical-align: baseline;
    background: #fff;
    transition: .3s ease;

}
.friend-drawer .text{
    margin-left:12px;
    width: 70%;
}
.friend-drawer text h3{
    margin-top: 6px;
    margin-bottom: 0px;
}

p{
        margin:0px;
}
.time{
    color: #c5c5c5;
}
.friend-drawer-onhover:hover{
    cursor: pointer;
    background:#e3e3e3;
    color: black;

}
hr{
    margin: 5px auto;
    width: 60%;
}

.chat-bubble{
    padding: 10px 14px;
    background: #eee;
    margin:10px 30px;
    border-radius: 9px;
    position: relative;
    animation:fadeIn 1s ease-in;
}

.chat-bubble-user{
    padding: 10px 14px;
    background: #48887b;
    color: :floralwhite;
    margin:10px 30px;
    border-radius: 9px;
    position: relative;
    animation:fadeIn 1s ease-in;
}

.chat-bubble::after{
    content: '';
    position: absolute;
    top: 50%;
    width: 0;
    height: 0;
    border: 20px solid transparent;
    margin-top: -10px
}
.chat-bubble-user::after{
    content: '';
    position: absolute;
    top: 50%;
    width: 0;
    height: 0;
    border: 20px solid transparent;
    margin-top: -10px;
}

.chat-bubble-left::after{
    left: 0;
    border-right-color: #eee;
    border-left:0;
    margin-left: -20px;
}

.chat-bubble-user::after{
    right: 0;
    border-right-color: #a32445;
    border-left:0;
    margin-left: -20px;
    color: floralwhite;
}

.chat-box-trey{
    background: #eee;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    margin-top: 19px;
}
.chat-box-trey input{
    margin: 0 10px;
    padding: 6px 2px;
}
.chat-box-trey i{
    color: #c5c5c5;
    font-size: 30px;
    vertical-align: middle;
}
.chat-box-trey i:last-of-type{
    margin-left: 25px;
}

      </style>
<div class="container">
    <div class="row no-gutters">
        <!--sidebar-->
          <div class="col-md-4 border-right">
              <div class="settings-trey">
                  <img class="profile-image" src="{{ asset('assets/img/chat.jpg') }}"  alt="profile image"/>
                  <span class="settings-trey-right float-right">
                      <i class="material-icons">cached</i>
                      <i class="material-icons">message</i>
                      <i class="material-icons">menu</i>
                  </span>

              </div>
              <div class="search-box">
                  <div class="input-wrapper p-2">
                      <i class="material-icons">search</i>
                      <input type="text" class="p-2" placeholder="search here">
                  </div>
              </div>


              <!--chats---->

              <div class="friend-drawer friend-drawer-onhover">
                <img src="{{ asset('assets/img/pdf.jpg') }}" alt="friend photo" class="profile-image">
                <div class="text">
                    <h6>Dammy</h6>
                    <p class="">Hey,what up!</p>
                </div>
                <span class="time small">13:21pm</span>
              </div>
                <hr>

                <div class="friend-drawer friend-drawer-onhover">
                    <img src="{{ asset('assets/img/bolaji.jpg') }}" alt="friend photo" class="profile-image">
                    <div class="text">
                        <h6>Bolaji</h6>
                        <p class="">Hey, not bad bro!</p>
                    </div>
                    <span class="time small">13:21pm</span>
                </div>
                <hr>

                <div class="friend-drawer friend-drawer-onhover">
                    <img src="{{ asset('assets/img/bolaji.jpg') }}" alt="friend photo" class="profile-image">
                    <div class="text">
                        <h6>Bolaji</h6>
                        <p class="">Hey, not bad bro!</p>
                    </div>
                    <span class="time small">13:21pm</span>
                </div>
              <!--endchat-->
          </div>


          <!--sidebar ends-->


        <div class="col-md-8">
            <!--main class header-->
            <div class="settings-trey">
                <div class="friend-drawer friend-drawer-onhover no-gutters" style="background: #c5c5c5; padding: 10px 15px;">
                    <img src="{{ asset('assets/img/bolaji.jpg') }}" alt="friend photo" class="profile-image">
                    <div class="text">
                        <h6>Christian</h6>
                        <p>online</p>
                    </div>
                    <span class="float-right">
                        <i class="material-icons">cached</i>
                        <i class="material-icons">message</i>
                        <i class="material-icons">menu</i>
                    </span>

                </div>
            </div>

            <!--end main class header-->

            <!---chat panel-->
            <div class="chat-panel">

                <div class="row no-gutters">
                    <div class="col-md-3">
                        <div class="chat-bubble chat-bubble-left">
                            Hello Christain!
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-3 offset-md-9">
                        <div class="chat-bubble-user chat-bubble-right" style="color:white">
                            Hi dammy
                        </div>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col-md-3 offset-md-9" >
                        <div class="chat-bubble-user chat-bubble-right" style="color:white">
                            Hi dammy
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-3">
                        <div class="chat-bubble chat-bubble-left">
                            Hello Christain!
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="chat-box-trey">
                            <i class="material-icons">sentiment_very_satisfied</i>
                            <input type="text" placeholder="type your message here...">

                            <i class="material-icons">mic</i>
                            <i class="material-icons">send</i>
                        </div>
                    </div>
                </div>



            </div>
            <!---chat panel ends-->
        </div>
    </div>
</div>



      @endsection