@extends('public.layout.app')
@section('banner')
 <!--BANNER AND SERACH BOX-->
    <section id="background" class="dir1-home-head">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="dir-ho-tl">
                        <ul>
                            <li>
                                <a href="main.html"><img src="/front/images/logo.png" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="dir-ho-tr">
                        <ul>
                            <li><a href="{{ URL('client/register')}}">Register</a> </li>
                            <li><a href="login.html">Sign In</a> </li>
                            <li><a href="db-listing-add.html"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container dir-ho-t-sp">
            <div class="row">
                <div class="dir-hr1">
                    <div class="dir-ho-t-tit">
                        <h1>Connect with the right Service Experts</h1> 
                        <p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p>
                    </div>
                    <form class="tourz-search-form" method="GET" action="/search_product">
                        <div class="input-field">
                            <input type="text"  id="select-city" class="autocomplete">
                            <label for="select-city">Enter city</label>
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="input-field">
                            <input type="text" name="name" id="select-search" class="autocomplete">
                            <label for="select-search" id="label-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>

                        </div>
                        <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> 

                            <!--{!! Form::submit('search', ['class' => 'waves-effect waves-light tourz-sear-btn']) !!}</div>-->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('section_menu') 
 <section id="myID" class="bottomMenu  hom-top-menu">
@endsection
@section('content')

<!--HOME PROJECTS-->
    <section class="proj mar-bot-red-m30">
        <div class="container">
            <div class="row">
                <!--HOME PROJECTS: 1-->
                <div class="col-md-3 col-sm-6">
                    <div class="hom-pro"> <img src="front/images/icon/1.png" alt="" />
                        <h4>24 Million Business</h4>
                        <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
                </div>
                <!--HOME PROJECTS: 1-->
                <div class="col-md-3 col-sm-6">
                    <div class="hom-pro"> <img src="front/images/icon/2.png" alt="" />
                        <h4>1,200 Services Offered</h4>
                        <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
                </div>
                <!--HOME PROJECTS: 1-->
                <div class="col-md-3 col-sm-6">
                    <div class="hom-pro"> <img src="front/images/icon/3.png" alt="" />
                        <h4>05 Million Visitors</h4>
                        <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
                </div>
                <!--HOME PROJECTS: 1-->
                <div class="col-md-3 col-sm-6">
                    <div class="hom-pro"> <img src="front/images/icon/7.png" alt="" />
                        <h4>24 Million Business</h4>
                        <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--FIND YOUR SERVICE-->
    <section class="com-padd com-padd-redu-bot1 pad-bot-red-40">
        <div class="container">
            <div class="row">
                <div class="com-title">
                    <h2>Find your <span>Services</span></h2>
                    <p>Explore some of the best business from around the world from our partners and friends.</p>
                </div>
                <div class="dir-hli">

                    <ul>
                        <!--=====LISTINGS======-->
                        @if(count($categories))
                        @foreach($categories as $category)

                        <li class="col-md-3 col-sm-6">
                            <a class="link" href="/products_of_category/{{$category->id}}">
                                <div class="dir-hli-5">
                                    <div class="dir-hli-1">
                                        <div class="dir-hli-3">{!!$category->image ? '<img src="../uploads/category/'.$category->image.'" alt=""/>':''!!} </div>
                                        <div class="dir-hli-4"> </div> {!!$category->image ? '<img src="../uploads/category/'.$category->image.'"  />':''!!} </div>
                                    <div class="dir-hli-2">
                                        <h4>{{ $category->name_en }} <span class="dir-ho-cat">Show All (940)</span></h4> </div>
                                </div>
                            </a>
                        </li>

                        @endforeach
                        @endif
                        <!--=====LISTINGS======-->			
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--EXPLORE CITY LISTING-->
    <section class="com-padd com-padd-redu-top">
        <div class="container">
            <div class="row">
                <div class="com-title">
                    <h2>Explore your <span>City Listings</span></h2>
                    <p>Explore some of the best business from around the world from our partners and friends.</p>
                </div>
                <div class="col-md-6">
                    <a href="list-lead.html">
                        <div class="list-mig-like-com">
                            <div class="list-mig-lc-img"> <img src="front/images/listing/home.jpg" alt="" /> </div>
                            <div class="list-mig-lc-con">
                                <div class="list-rat-ch list-room-rati"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                                <h5>United States</h5>
                                <p>21 Cities . 2045 Listings . 3648 Users</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="list-lead.html">
                        <div class="list-mig-like-com">
                            <div class="list-mig-lc-img"> <img src="front/images/listing/home2.jpg" alt="" /> </div>
                            <div class="list-mig-lc-con list-mig-lc-con2">
                                <h5>United Kingdom</h5>
                                <p>18 Cities . 1454 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="list-lead.html">
                        <div class="list-mig-like-com">
                            <div class="list-mig-lc-img"> <img src="front/images/listing/home3.jpg" alt="" /> </div>
                            <div class="list-mig-lc-con list-mig-lc-con2">
                                <h5>Australia</h5>
                                <p>14 Cities . 1895 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="list-lead.html">
                        <div class="list-mig-like-com">
                            <div class="list-mig-lc-img"> <img src="front/images/listing/home4.jpg" alt="" /> </div>
                            <div class="list-mig-lc-con list-mig-lc-con2">
                                <h5>Germany</h5>
                                <p>12 Cities . 1260 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="list-lead.html">
                        <div class="list-mig-like-com">
                            <div class="list-mig-lc-img"> <img src="front/images/listing/home1.jpg" alt="" /> </div>
                            <div class="list-mig-lc-con list-mig-lc-con2">
                                <h5>India</h5>
                                <p>24 Cities . 4152 Listings</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--ADD BUSINESS-->
    <section class="com-padd home-dis">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><span>30% Off</span> Promote Your Business with us <a href="price.html">Add My Business</a></h2> </div>
            </div>
        </div>
    </section>
    <!--BEST THINGS-->
    <section class="com-padd com-padd-redu-bot1">
        <div class="container dir-hom-pre-tit">
            <div class="row">
                <div class="com-title">
                    <h2>Top Trendings for <span>your City</span></h2>
                    <p>Explore some of the best tips from around the world from our partners and friends.</p>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/tr1.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="automobile-listing-details.html"><h3>Import Motor America</h3></a>
                                <h4>Express Avenue Mall, Santa Monica</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/tr2.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="property-listing-details.html"><h3>Luxury Property</h3></a>
                                <h4>Express Avenue Mall, New York</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/tr3.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="shop-listing-details.html"><h3>Spicy Supermarket Shop</h3></a>
                                <h4>Express Avenue Mall, Chicago</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/s4.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Packers and Movers</h3></a>
                                <h4>Express Avenue Mall, Toronto</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/s5.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Tour and Travels</h3></a>
                                <h4>Express Avenue Mall, Los Angeles</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/s6.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Andru Modular Kitchen</h3></a>
                                <h4>Express Avenue Mall, San Diego</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/s7.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Rute Skin Care & Treatment</h3></a>
                                <h4>Express Avenue Mall, Toronto</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR LISTINGS-->
                        <div class="home-list-pop mar-bot-red-0">
                            <!--POPULAR LISTINGS IMAGE-->
                            <div class="col-md-3"> <img src="/front/images/services/s8.jpg" alt="" /> </div>
                            <!--POPULAR LISTINGS: CONTENT-->
                            <div class="col-md-9 home-list-pop-desc"> <a href="list-lead.html"><h3>Health and Fitness</h3></a>
                                <h4>Express Avenue Mall, San Diego</h4>
                                <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p> <span class="home-list-pop-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                        <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                        <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                        <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CREATE FREE ACCOUNT-->
    <section class="com-padd sec-bg-white">
        <div class="container">
            <div class="row">
                <div class="com-title">
                    <h2>Create a free <span>Account</span></h2>
                    <p>Explore some of the best tips from around the world from our partners and friends.</p>
                </div>
                <div class="col-md-6">
                    <div class="hom-cre-acc-left">
                        <h3>A few reasons you’ll love Online <span>Business Directory</span></h3>
                        <p>5 Benefits of Listing Your Business to a Local Online Directory</p>
                        <ul>
                            <li> <img src="/front/images/icon/7.png" alt="">
                                <div>
                                    <h5>Enhancing Your Business</h5>
                                    <p>Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                                </div>
                            </li>
                            <li> <img src="/front/images/icon/5.png" alt="">
                                <div>
                                    <h5>Advertising Your Business</h5>
                                    <p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
                                </div>
                            </li>
                            <li> <img src="/front/images/icon/6.png" alt="">
                                <div>
                                    <h5>Develop Brand Image</h5>
                                    <p>Your local business too needs brand management and image making. As you know the local market..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hom-cre-acc-left hom-cre-acc-right">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="acc-name" type="text" class="validate">
                                    <label for="acc-name">Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="acc-mob" type="number" class="validate">
                                    <label for="acc-mob">Mobile</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="acc-mail" type="email" class="validate">
                                    <label for="acc-mail">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="acc-pass" type="password" class="validate">
                                    <label for="acc-pass">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 hom-cr-acc-check">
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">By signing up, you agree to the Terms and Conditions and Privacy Policy. You also agree to receive product-related emails.</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12"> <a class="waves-effect waves-light btn-large full-btn" href="#!">Submit Now</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MOBILE APP-->
    <section class="web-app com-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 web-app-img"> <img src="/front/images/mobile.png" alt="" /> </div>
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
                    <a href="#"><img src="/front/images/android.png" alt="" /> </a>
                    <a href="#"><img src="/front/images/apple.png" alt="" /> </a>
                </div>
            </div>
        </div>
    </section>
    

    @endsection('content') 
