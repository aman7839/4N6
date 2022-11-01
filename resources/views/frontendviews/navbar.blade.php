<!DOCTYPE html>
<html lang="en">
   

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4n6</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toast.css')}}">
   

    <link rel="stylesheet" href="{{asset('4n61/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.min.css')}}">
    <link rel="stylesheet" href="{{asset('4n61/css/steps.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Header starts  herer -->
    <header>
        <div class="custom_container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{asset('images/fanatic_logo.svg')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('review') ? 'active' : ''}}" href="#">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('tutorial') ? 'active' : ''}}" href="{{url('tutorial')}}">Tutorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('school') ? 'active' : ''}}" href="{{url('school')}}">Schools</a>
                        </li>
                        <li class="nav-item">
                            
                            <a class="nav-link  {{ request()->is('contactUs') ? 'active' : ''}}" href="{{url('contactUs')}}">Contact Us</a>
                        </li>


                    </ul>

                </div>
                <div class="navigates">
                    <a href="#" class="facebook_link"><img src="{{asset('images/facebook-square.svg')}}"></a>
                    <a href="{{url('login')}}" class="cmn_btn">Member Login</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Header ends here -->