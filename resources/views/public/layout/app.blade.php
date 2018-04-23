<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from rn53themes.net/themes/demo/directory/list-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Apr 2018 10:08:15 GMT -->
    <head>
        <title>World Best Local Directory Website template</title>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- FAV ICON(BROWSER TAB ICON) -->
        <link rel="shortcut icon" href="/front/images/fav.ico" type="image/x-icon">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
        <!-- FONTAWESOME ICONS -->
        <link rel="stylesheet" href="../front/css/font-awesome.min.css">
        <!-- ALL CSS FILES -->
        <link href="{{ asset('front/css/materialize.css')}}" rel="stylesheet">
        <link href="{{ asset('front/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('front/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
        <link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="front/js/html5shiv.js"></script>
        <script src="front/js/respond.min.js"></script>
        <![endif]-->
        <style>
            li.li-search {padding-left: 15px;}
        </style>
    </head>


    <body>
        
        <!--PRE LOADING-->
        <!--    <div id="preloader">
                <div id="status">&nbsp;</div>
            </div>-->
        @yield('banner')
        <!--TOP SEARCH SECTION-->
        <!--<section id="myID" class="bottomMenu hom-top-menu ">-->
        @yield('section_menu')
        <div class="container top-search-main">
            <div class="row">
                <div class="ts-menu">
                    <!--SECTION: LOGO-->
                    <div class="ts-menu-1">
                        <a href="main.html"><img src="/front/images/aff-logo.png" alt=""> </a>
                    </div>
                    <!--SECTION: BROWSE CATEGORY(NOTE:IT'S HIDE ON MOBILE & TABLET VIEW)-->
                    <div class="ts-menu-2"><a href="#" class="t-bb">All Pages {{Session::get('locale')}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <!--SECTION: BROWSE CATEGORY-->
                        <div class="cat-menu cat-menu-1">
                            <div class="dz-menu">
                                <div class="dz-menu-inn">
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href="main.html">Home</a></li>
                                        <li><a href="index-1.html">Home 1</a></li>
                                        <li><a href="list.html">All Listing</a></li>
                                        <li><a href="listing-details.html">Listing Details </a> </li>
                                        <li><a href="price.html">Add Listing</a> </li>
                                        <li><a href="list-lead.html">Lead Listing</a></li>
                                        <li><a href="list-grid.html">Listing Grid View</a></li>
                                    </ul>
                                </div>
                                <div class="dz-menu-inn">
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href="new-business.html"> New Listings </a> </li>
                                        <li><a href="nearby-listings.html">Nearby Listings</a> </li>
                                        <li><a href="customer-reviews.html"> Customer Reviews</a> </li>
                                        <li><a href="trendings.html"> Top Trendings</a> </li>
                                        <li><a href="how-it-work.html"> How It Work</a> </li>
                                        <li><a href="advertise.html"> Advertise with us</a> </li>
                                        <li><a href="price.html"> Price Details</a> </li>
                                    </ul>
                                </div>
                                <div class="dz-menu-inn">
                                    <h4>Frontend Pages</h4>
                                    <ul>
                                        <li><a href="about-us.html"> About Us</a> </li>
                                        <li><a href="customer-reviews.html"> Customer Reviews</a> </li>
                                        <li><a href="contact-us.html"> Contact Us</a> </li>
                                        <li><a href="blog.html"> Blog Post</a> </li>
                                        <li><a href="blog-content.html"> Blog Details</a> </li>
                                        <li><a href="elements.html"> All Elements </a> </li>
                                        <li><a href="shop-listing-details.html"> Shop Details </a> </li>
                                        <li><a href="property-listing-details.html"> Property Details </a> </li>
                                    </ul>
                                </div>
                                <div class="dz-menu-inn">
                                    <h4>Dashboard Pages</h4>
                                    <ul>
                                        <li><a href="dashboard.html"> Dashboard</a> </li>
                                        <li><a href="db-invoice.html"> Invoice</a> </li>
                                        <li><a href="db-setting.html"> User Setting</a> </li>
                                        <li><a href="db-all-listing.html"> All Listings</a> </li>
                                        <li><a href="db-listing-add.html"> Add New Listing</a> </li>
                                        <li><a href="db-review.html"> Listing Reviews</a> </li>
                                        <li><a href="db-payment.html"> Listing Payments </a> </li>
                                    </ul>
                                </div>
                                <div class="dz-menu-inn">
                                    <h4>Dashboard Pages</h4>
                                    <ul>
                                        <li><a href="{{ URL('client/register')}}"> User Register</a> </li>
                                        <li><a href="login.html"> User Login</a> </li>
                                        <li><a href="forgot-pass.html"> Forgot Password</a> </li>
                                        <li><a href="db-message.html"> Messages</a> </li>
                                        <li><a href="db-my-profile.html"> Dashboard Profile</a> </li>
                                        <li><a href="db-post-ads.html"> Post Ads </a> </li>
                                        <li><a href="db-invoice-download.html"> Download Invoice </a> </li>
                                    </ul>
                                </div>
                                <div class="dz-menu-inn lat-menu">
                                    <h4>Admin Panel Pages</h4>
                                    <ul>
                                        <li><a target="_blank" href="admin.html"> Admin</a> </li>
                                        <li><a target="_blank" href="admin-all-listing.html"> All Listing</a> </li>
                                        <li><a target="_blank" href="admin-all-users.html"> All Users</a> </li>
                                        <li><a target="_blank" href="admin-analytics.html"> Analytics</a> </li>
                                        <li><a target="_blank" href="admin-ads.html"> Advertisement</a> </li>
                                        <li><a target="_blank" href="admin-setting.html"> Admin Setting </a> </li>
                                        <li><a target="_blank" href="admin-payment.html"> Payments </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dir-home-nav-bot">
                                <ul>
                                    <li>A few reasons you’ll love Online Business Directory <span>Call us on: +01 6214 6548</span> </li>
                                    <li><a href="advertise.html" class="waves-effect waves-light btn-large"><i class="fa fa-bullhorn"></i> Advertise with us</a>
                                    </li>
                                    <li><a href="db-listing-add.html" class="waves-effect waves-light btn-large"><i class="fa fa-bookmark"></i> Add your business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--SECTION: SEARCH BOX-->
                    <div class="ts-menu-3">
                        <div class="">
                            <form class="tourz-search-form tourz-top-search-form" method="GET" action="/search_product">
                                <div class="input-field">
                                    <input type="text" id="top-select-city" class="autocomplete">
                                    <label for="top-select-city">Enter city</label>
                                </div>
                                <div class="input-field">
                                    <input type="text"  name="name" id="top-select-search" class="autocomplete">
                                    <label for="top-select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                                </div>
                                <div class="input-field">
                                        <!--<input type="submit" value="" class="waves-effect waves-light tourz-top-sear-btn">--> 
                                    {!! Form::submit('search', ['class' => 'waves-effect waves-light tourz-top-sear-btn']) !!}
                                </div>
                            </form>
                            <!--</div>-->
                        </div>
                        <!--SECTION: REGISTER,SIGNIN AND ADD YOUR BUSINESS-->
                        <div class="ts-menu-4">
                           
                            <div class="v3-top-ri" style="position: absolute;float: right;top: 10px;right: 0;">
                                <ul>
                                    <select id="language_select" class="v3-menu-sign">
                                        <option value="">@lang('home.select_language') </option>
                                        <option value="en">English</option>
                                        <option value="ar">عربي</option>
                                    </select>
                                    <li><a href="{{URL('login')}}" class="v3-menu-sign"><i class="fa fa-sign-in"></i> Sign In</a> </li>
                                    <li><a href="db-listing-add.html" class="v3-add-bus"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </li>
                                </ul>
                            </div>
                        </div>
                        <!--MOBILE MENU ICON:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
                        <div class="ts-menu-5"><span><i class="fa fa-bars" aria-hidden="true"></i></span> </div>
                        <!--MOBILE MENU CONTAINER:IT'S ONLY SHOW ON MOBILE & TABLET VIEW-->
                        <div class="mob-right-nav" data-wow-duration="0.5s">
                            <div class="mob-right-nav-close"><i class="fa fa-times" aria-hidden="true"></i> </div>
                            <h5>Business</h5>
                            <ul class="mob-menu-icon" >
                                <li><a href="price.html">Add Business</a> </li>
                                <li><a href="#!" data-toggle="modal" data-target="#register">Register</a> </li>
                                <li><a href="#!" data-toggle="modal" data-target="#sign-in">Sign In</a> </li>
                            </ul>
                            <h5>All Categories</h5>
                            <ul>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Help Services</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Appliances Repair & Services</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Furniture Dealers</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Packers and Movers</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Pest Control </a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Solar Product Dealers</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Interior Designers</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Carpenters</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Plumbing Contractors</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Modular Kitchen</a> </li>
                                <li><a href="list.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Internet Service Providers</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        @yield('content') 





        <!--FOOTER SECTION-->
        <footer id="colophon" class="site-footer clearfix">
            <div id="quaternary" class="sidebar-container " role="complementary">
                <div class="sidebar-inner">
                    <div class="widget-area clearfix">
                        <div id="azh_widget-2" class="widget widget_azh_widget">
                            <div data-section="section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3 foot-logo"> <img src="/front/images/foot-logo.png" alt="logo">
                                            <p class="hasimg">Worlds's No. 1 Local Business Directory Website.</p>
                                            <p class="hasimg">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Support & Help</h4>
                                            <ul class="two-columns">
                                                <li> <a href="advertise.html">Advertise us</a> </li>
                                                <li> <a href="about-us.html">About Us</a> </li>
                                                <li> <a href="customer-reviews.html">Review</a> </li>
                                                <li> <a href="how-it-work.html">How it works </a> </li>
                                                <li> <a href="add-listing.html">Add Business</a> </li>
                                                <li> <a href="#!">Register</a> </li>
                                                <li> <a href="#!">Login</a> </li>
                                                <li> <a href="#!">Quick Enquiry</a> </li>
                                                <li> <a href="#!">Ratings </a> </li>
                                                <li> <a href="trendings.html">Top Trends</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Popular Services</h4>
                                            <ul class="two-columns">
                                                <li> <a href="#!">Hotels</a> </li>
                                                <li> <a href="#!">Hospitals</a> </li>
                                                <li> <a href="#!">Transportation</a> </li>
                                                <li> <a href="#!">Real Estates </a> </li>
                                                <li> <a href="#!">Automobiles</a> </li>
                                                <li> <a href="#!">Resorts</a> </li>
                                                <li> <a href="#!">Education</a> </li>
                                                <li> <a href="#!">Sports Events</a> </li>
                                                <li> <a href="#!">Web Services </a> </li>
                                                <li> <a href="#!">Skin Care</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <h4>Cities Covered</h4>
                                            <ul class="two-columns">
                                                <li> <a href="#!">Atlanta</a> </li>
                                                <li> <a href="#!">Austin</a> </li>
                                                <li> <a href="#!">Baltimore</a> </li>
                                                <li> <a href="#!">Boston </a> </li>
                                                <li> <a href="#!">Chicago</a> </li>
                                                <li> <a href="#!">Indianapolis</a> </li>
                                                <li> <a href="#!">Las Vegas</a> </li>
                                                <li> <a href="#!">Los Angeles</a> </li>
                                                <li> <a href="#!">Louisville </a> </li>
                                                <li> <a href="#!">Houston</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-section="section" class="foot-sec2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h4>Payment Options</h4>
                                            <p class="hasimg"> <img src="/front/images/payment.png" alt="payment"> </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h4>Address</h4>
                                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                            <p> <span class="strong">Phone: </span> <span class="highlighted">+01 1245 2541</span> </p>
                                        </div>
                                        <div class="col-sm-5 foot-social">
                                            <h4>Follow with us</h4>
                                            <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                            <ul>
                                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .widget-area -->
                </div>
                <!-- .sidebar-inner -->
            </div>
            <!-- #quaternary -->
        </footer>
        <!--COPY RIGHTS-->
        <section class="copy">
            <div class="container">
                <p>copyrights © 2017 RN53Themes.net. &nbsp;&nbsp;All rights reserved. </p>
            </div>
        </section>
        <!--QUOTS POPUP-->
        <section>
            <!-- GET QUOTES POPUP -->
            <div class="modal fade dir-pop-com" id="list-quo" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header dir-pop-head">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Get a Quotes</h4>
                            <!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
                        </div>
                        <div class="modal-body dir-pop-body">
                            <form method="post" class="form-horizontal">
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Full Name *</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="fname" placeholder="" required> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Mobile</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="mobile" placeholder=""> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="email" placeholder=""> </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <label class="col-md-4 control-label">Message</label>
                                    <div class="col-md-8 get-quo">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <!--LISTING INFORMATION-->
                                <div class="form-group has-feedback ak-field">
                                    <div class="col-md-6 col-md-offset-4">
                                        <input type="submit" value="SUBMIT" class="pop-btn"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GET QUOTES Popup END -->
        </section>
            <!--<script src="../front/js/jquery.min.js"></script>-->
        <!--SCRIPT FILES-->
        <script src="{{ asset('front/js/jquery.min.js')}}"></script>
        <script src="{{ asset('front/js/bootstrap.js')}}" type="text/javascript"></script>
        <script src="{{ asset('front/js/materialize.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('front/js/custom.js')}}"></script>
        <script type="text/javascript">
$("#language_select").change(function () {
    language = $(this).val();
    $.ajax({
        type: "GET",
        // url: "{{ URL('changelanguage') }}",
        url: "/changelanguage",
        data: {
            "lang": language,
        },
        success: function (msg) {
            location.reload();
        },
        error: function (msg) {
            console.log(msg);
        }
    });
});
        </script>
        <script>

            var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
            var pathArray = window.location.pathname.split('/');
            var secondLevelLocation = pathArray[0];
            var newPathname = "";
            // var id_link = document.getElementById(pathArray[2]);
            function getLocation() {

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
            }
            function showPosition(position) {
                alert("t55");
                localStorage.setItem("latitude", position.coords.latitude);
                localStorage.setItem("longitude", position.coords.longitude);
            }
            $(document).ready(function () {
                $('.link').each(function (i, obj) {
                    var link = obj.href;
                    var link2 = obj.href;
                    obj.href = obj.href + '?lat=' + localStorage.getItem('latitude') + '&lang=' + localStorage.getItem('longitude');
                });
                * /
                
                
                        getLocation();
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#select-search").keyup(function () {
                    $.ajax({
                        type: "GET",
                        url: "/search_list/" + $('#select-search').val(),
                        success: function (msg) {
                            var i;
                            $("#label-search").after("<ul class='autocomplete-content dropdown-content' id='ul-search'>");
                            for (i = 0; i < msg.data.length; i++) {
                                console.log(msg.data[i].category_id);
                                $("#ul-search").append("<li class='li-search'><a href='search_product?name=" + msg.data[i].name_en + "'>" + msg.data[i].name_en + "</a></li>");
                            }
                            $(".li-search").append("</ul>");
                            $(".li-search").click(function () {
                                $("#select-search").val($(this).text());
                            });
                        }
                    });
                });
                $("#top-select-search").keyup(function () {
                    $.ajax({
                        type: "GET",
                        url: "/search_list/" + $('#top-select-search').val(),
                        success: function (msg) {
                            var i;
                            $("#top-select-search").after("<ul class='autocomplete-content dropdown-content' id='ul-search'>");
                            for (i = 0; i < msg.data.length; i++) {
                                console.log(msg.data[i].name_en);
                                $("#ul-search").append("<li class='li-search'><a href='search_product?name=" + msg.data[i].name_en + "'>" + msg.data[i].name_en + "</a></li>");
                            }
                            $(".li-search").append("</ul>");
                            $(".li-search").click(function () {
                                $("#top-select-search").val($(this).text());
                            });
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#review-btn').click(function () {
                    alert($('.rating').find('input:checked').val());
                    $.ajax({
                        type: "POST",
                        url: "/store_review",
                        data: {
                            name: $('#review_name').val(),
                            mobile: $('#review_mobile').val(),
                            email: $('#review_email').val(),
                            city: $('#review_city').val(),
                            rating: $('.rating').find('input:checked').val(),
                            review: $('#review_review').val(),
                            product_id: $('#review_product_id').val(),
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (msg) {
                            console.log('erorrrs : ' + msg);
                        },
                        error: function (msg) {
                            console.log('erorrrs : ' + msg);
                        }
                    });
                });
            });
        </script>
</body>
</html>