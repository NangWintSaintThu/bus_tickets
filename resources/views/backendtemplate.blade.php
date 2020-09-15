<!doctype html>
<html lang="en">
<head>
  <title>Sidebar 09</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">

       {{--  <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div> --}}

        <div class="img bg-wrap text-center py-4" style="background-image: url(backend/images/bus.jpg);">
          <div class="user-logo">
            <div class="img" style="background-image: url(backend/images/bus.jpg);"></div>
          </div>
        </div>
        
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{route('homepage')}}"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>

            <a href="{{route('travellerinfos.index')}}"><span class="fa fa-book mr-3"><small class="d-flex align-items-center justify-content-center"></small></span>Traveller Info</a>
          </li>
          <li>
            <a href="{{route('bookingdetails.index')}}"><span class="fa fa-pencil mr-3"></span>Booking Detail</a>
          </li>
          <li>
            <a href="{{route('routes.index')}}"><span class="fa fa-road mr-3"></span> Route </a>
          </li>
          <li>
            <a href="{{route('cities.index')}}"><span class="fa fa-cog mr-3"></span>City</a>
          </li>
          <li>
          <li>
            <a href="{{route('buscompanies.index')}}"><span class="fa fa-building mr-3"></span>Bus Company</a>
          </li>
          <li>
            <a href="{{route('bustypes.index')}}"><span class="fa fa-bus mr-3"></span>Bus Type</a>

          </li>
        </ul>

      </nav>
      @yield('content')


      <!-- Page Content  -->
      
    </div>
    <<<<<<< HEAD
    @yield('content')
    =======
    
    >>>>>>> 13d5b2f869014f84ed7a1a1fcbabfa4ef6401040
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/popper.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script>
  </body>
  </html>

