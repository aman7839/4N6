@extends('frontendviews.main')

@section('content')
<section class="cmn_header_section space">
    <div class="custom_container">
        <h1>Welcome ! <br>
            4n6 Member Login</h1>
    </div>
</section>
<div>

    <div class="custom_container space">
        <div class="row align-items-center">
           <div class="col-md-5">
                <div class="login_image">
                    <img src="{{asset('4n61/images/login.png')}}" class="img-fluid" alt="">
                </div>
           </div>
           <div class="col-md-5">
            <div class="cmn_heading mb-4 text-start">
                <h2 class="ms-0">User Login</h2>
            </div>
            <div class="user_login">
                <form action="">
                    <div class="form-group">
                        <label for="">Username or Email</label>
                        <input type="text" placeholder="Enter your username or email" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" placeholder="Enter your password" class="form-control" >
                    </div>
                    <div class="remeber_password">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                             Remember me
                            </label>
                          </div>
                          <a href="">Forget Password</a>
                    </div>
                    <div>
                        <button class="cmn_btn">Login</button>
                        <p>Didn't have an account? <a href="{{url('register')}}">Sign up</a></p>
                    </div>
                </form>
            </div>
           </div>
        </div>

    </div>

</div>





@endsection