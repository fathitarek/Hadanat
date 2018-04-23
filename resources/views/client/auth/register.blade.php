@extends('public.layout.app')
@section('section_menu') 
 <section class="bottomMenu dir-il-top-fix">
@endsection
@section('content') 

@section('content')

    <!--TOP SEARCH SECTION-->
   
    <section class="tz-register">
        <div class="log-in-pop">
            <div class="log-in-pop-left">

                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.html" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12"  method="POST" action="{{ url('/client/register')}}">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <div>
                        <div class="input-field s12">
                            <input type="text" name="name" class="validate" value="{{ old('name')}}" autofocus>
                            <label>User name</label>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors -> first('name')}}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" id="email" name="email" class="validate" value="{{ old('email')}}" autofocus>
                            <label>Email id</label>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors -> first('email')}}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" id="password" name="password" class="validate">
                            <label>Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors -> first('password')}}</strong>
                            </span>
                            @endif

                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" id="password-confirm" name="password_confirmation" class="validate">
                            <label>Confirm password</label>
                        </div>
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors -> first('password_confirmation')}}</strong>
                        </span>
                        @endif

                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="number" name="mobile" class="validate" id="mobile" value="{{ old('mobile')}}" autofocus>
                            <label>Mobile</label>
                            @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="text" name="product_name" class="validate" id="product_name" value="{{ old('product_name')}}" autofocus>
                            <label>Product Name</label>
                             @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif

                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="login.html">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--MOBILE APP-->
    <section class="web-app com-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 web-app-img"> <img src="images/mobile.png" alt="" /> </div>
                <div class="col-md-6 web-app-con">
                    <h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Find nearby listings</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Easy service enquiry</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Listing reviews and ratings</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Manage your listing, enquiry and reviews</li>
                    </ul> <span>We'll send you a link, open it on your phone to download the app</span>
                    <form>
                        <ul>
                            <li>
                                <input type="text" placeholder="+01" /> </li>
                            <li>
                                <input type="number" placeholder="Enter mobile number" /> </li>
                            <li>
                                <input type="submit" value="Get App Link" /> </li>
                        </ul>
                    </form>
                    <a href="#"><img src="images/android.png" alt="" /> </a>
                    <a href="#"><img src="images/apple.png" alt="" /> </a>
                </div>
            </div>
        </div>
    </section>
 
    @endsection 