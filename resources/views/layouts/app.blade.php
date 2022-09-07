<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Leading research consultancy firm in Nigeria. Academic research. Thesis writing" />
    <meta property="og:title" content="Welcome to Datagenius Consulting">
    <meta property="og:description" content="Leading research consultancy firm in Nigeria. Academic research. Thesis writing" />
    <meta property="og:image" content="bg3.png" />


    <link rel="shortcut icon" href="{{ asset('assets/img/dgicon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/dgicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Datagenius Consulting</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Owl Theme Default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/imagelightbox.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/dgicon.png">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202898079-1">
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-202898079-1');
  </script>

      <!-- Facebook Pixel Code -->
      <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '290702805671160');
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=290702805671160&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
      <!-- TITLE -->
      <title>Leading research consultancy firm in Nigeria. Academic research. Thesis writing - Datagenius Consulting</title>


     <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/61ae9225c82c976b71c01506/1fm8ulp9q';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script>
      <!--End of Tawk.to Script-->

      <style type="text/css">
        tr:hover{
            background-color: #E0E0E0!important;
        }

        #show-pdf-button {
            width: 150px;
            display: block;
            margin: 20px auto;
        }

        #file-to-upload {
            display: none;
        }

        #pdf-main-container {
            width: 100%;
            margin: 20px 0px;
        }

        #pdf-loader {
            display: none;
            text-align: center;
            color: #999999;
            font-size: 13px;
            line-height: 100px;
            height: 100px;
        }

        #pdf-contents {
            display: none;
        }

        #pdf-meta {
            overflow: hidden;
            margin: 0 0 20px 0;
        }

        #pdf-buttons {
            float: left;
        }

        #page-count-container {
            float: right;
        }

        #pdf-current-page {
            display: inline;
        }

        #pdf-total-pages {
            display: inline;
        }

        #pdf-canvas {
            border: 1px solid rgba(0,0,0,0.2);
            box-sizing: border-box;
        }

        #page-loader {
            height: 100px;
            line-height: 100px;
            text-align: center;
            display: none;
            color: #999999;
            font-size: 13px;
        }
    </style>

</head>
<body>
    <div id="app">

        <main>
            @yield('content')
        </main>
    </div>
</body>

 <!-- Jquery Slim JS -->
 <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
 <!-- Popper JS -->
 <script src="{{ asset('assets/js/popper.min.js') }}"></script>
 <!-- Bootstrap JS -->
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- Meanmenu JS -->
 <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
 <!-- Wow JS -->
 <script src="{{ asset('assets/js/wow.min.js') }}"></script>
 <!-- Owl Carousel JS -->
 <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
 <!-- Imagelightbox JS -->
 <script src="{{ asset('assets/js/imagelightbox.min.js') }}"></script>
 <!-- Mixitup JS -->
 <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
 <!-- Nice Select JS -->
 <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
 <!-- Form Validator JS -->
 <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
 <!-- Contact JS -->
 <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
 <!-- Peru Map JS FILE -->
 <script src="{{ asset('assets/js/peru-map.js') }}"></script>
 <!-- Custom JS -->
 <script src="{{ asset('assets/js/custom.js') }}"></script>

 <script>
    const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');

      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    </script>
</html>
