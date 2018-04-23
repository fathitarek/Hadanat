@extends('public.layout.app')
@section('section_menu') 
 <section class="bottomMenu dir-il-top-fix">
@endsection
@section('content') 

    <section class="dir-alp dir-pa-sp-top">
        <div class="container">
            <div class="row">
                <div class="dir-alp-tit">
                    <h1>Listing Grid View</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a> </li>
                        <li><a href="#">Listing</a> </li>
                        <li class="active">Grid View</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="dir-alp-con">
                    <div class="col-md-3 dir-alp-con-left">
                        <div class="dir-alp-con-left-1">
                            <h3>Nearby Listings({{count($sort_products)}})</h3> </div>
                        <div class="dir-hom-pre dir-alp-left-ner-notb">
                            <ul>
                                <!--==========NEARBY LISTINGS============-->
                                @if(isset($sort_products))
                                @foreach($sort_products as $sort_product)
                                <li>
                                    <a href="listing-details.html">
                                        <div class="list-left-near lln1"> {!!$sort_product->logo ? '<img src="../uploads/products/'.$sort_product->logo.'" alt=""/>':''!!} </div>
                                        <div class="list-left-near lln2">
                                            <h5>{{$sort_product->name_en}}</h5> <span>{{$sort_product->address}}</span> </div>

                                        <div class="list-left-near lln2"> <span>{{$sort_product->distance}}km</span> </div>
                                    </a>
                                </li>
                                @endforeach
                                @endif
                                <!--==========END NEARBY LISTINGS============-->
                                <!--==========NEARBY LISTINGS============-->

                                <!--==========END NEARBY LISTINGS============-->
                            </ul>
                        </div>
                        <!--==========Sub Category Filter============-->
                        <div class="dir-alp-l3 dir-alp-l-com">
                            <h4>Sub Category Filter</h4>
                            <div class="dir-alp-l-com1 dir-alp-p3">
                                <form action="#">
                                    <ul>
                                        <li>
                                            <input type="checkbox" id="scf1" />
                                            <label for="scf1">Hortels & Resorts</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="scf2" />
                                            <label for="scf2">Fitness Care</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="scf3" />
                                            <label for="scf3">Educations</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="scf4" />
                                            <label for="scf4">Property</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="scf5" />
                                            <label for="scf5">Home Services</label>
                                        </li>
                                    </ul>
                                </form> <a href="#!" class="list-view-more-btn">view more</a> </div>
                        </div>
                        <!--==========End Sub Category Filter============-->
                        <!--==========Sub Category Filter============-->
                        <div class="dir-alp-l3 dir-alp-l-com">
                            <h4>Distance</h4>
                            <div class="dir-alp-l-com1 dir-alp-p3">
                                <form>
                                    <ul>
                                        <li>
                                            <input class="with-gap" name="group1" type="radio" id="ldis1" />
                                            <label for="ldis1">00 to 02km</label>
                                        </li>
                                        <li>
                                            <input class="with-gap" name="group1" type="radio" id="ldis2" />
                                            <label for="ldis2">02 to 05km</label>
                                        </li>
                                        <li>
                                            <input class="with-gap" name="group1" type="radio" id="ldis3" />
                                            <label for="ldis3">05 to 10km</label>
                                        </li>
                                        <li>
                                            <input class="with-gap" name="group1" type="radio" id="ldis4" />
                                            <label for="ldis4">10 to 20km</label>
                                        </li>
                                        <li>
                                            <input class="with-gap" name="group1" type="radio" id="ldis5" />
                                            <label for="ldis5">20 to 30km</label>
                                        </li>
                                    </ul>
                                </form> <a href="#!" class="list-view-more-btn">view more</a> </div>
                        </div>
                        <!--==========End Sub Category Filter============-->
                        <!--==========Sub Category Filter============-->
                        <div class="dir-alp-l3 dir-alp-l-com">
                            <h4>Ratings</h4>
                            <div class="dir-alp-l-com1 dir-alp-p3">
                                <form>
                                    <ul>
                                        <li>
                                            <input type="checkbox" class="filled-in" id="lr1" />
                                            <label for="lr1"> <span class="list-rat-ch"> <span>5.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filled-in" id="lr2" />
                                            <label for="lr2"> <span class="list-rat-ch"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filled-in" id="lr3" />
                                            <label for="lr3"> <span class="list-rat-ch"> <span>3.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filled-in" id="lr4" />
                                            <label for="lr4"> <span class="list-rat-ch"> <span>2.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" class="filled-in" id="lr5" />
                                            <label for="lr5"> <span class="list-rat-ch"> <span>1.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                                            </label>
                                        </li>
                                    </ul>
                                </form> <a href="javascript:void(0);" class="list-view-more-btn">view more</a> </div>
                        </div>
                        <!--==========End Sub Category Filter============-->
                    </div>
                    <div class="col-md-9 dir-alp-con-right list-grid-rig-pad">
                        <div class="dir-alp-con-right-1">
                            <div class="row">
                                <!--LISTINGS-->
                                <div class="row span-none">

                                    @if(isset($products))
                                    @foreach($products as $product)
                                    <div class="col-md-4">
                                        <a href="/product_list/{{$product->id}}">
                                            <div class="list-mig-like-com com-mar-bot-30">
                                                <div class="list-mig-lc-img"> {!!$product->cover ? '<img src="../uploads/products/'.$product->cover.'" alt=""/>':''!!}  <span class="home-list-pop-rat list-mi-pr">$720</span> </div>
                                                <div class="list-mig-lc-con"> <div class="list-rat-ch"> <span>{{$product->total_rate}}</span>
                                                        <?php
                                                        for ($i = 0; $i < $product->total_rate; $i++) {
                                                            ?>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <?php
                                                        }
                                                        for ($j = 0; $j < (5 - $product->total_rate); $j++) {
                                                            ?>
                                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <?php }
                                                        ?></div>
                                                                                 <!--<div class="list-rat-ch list-room-rati"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>-->
                                                    <h5>{{$product->name_en}}</h5>
                                                    <h6>{{$product->distance}} km </h6>
                                                    <p>{{$product->address}}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif

                                    <div class="row">
                                        @if(isset($products))
                                        {!! $products->render() !!}
                                         @endif
                                        <!--    <ul class="pagination list-pagenat">
                                               <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a> </li>
                                               <li class="active"><a href="#!">1</a> </li>
                                               <li class="waves-effect"><a href="#!">2</a> </li>
                                               <li class="waves-effect"><a href="#!">3</a> </li>
                                               <li class="waves-effect"><a href="#!">4</a> </li>
                                               <li class="waves-effect"><a href="#!">5</a> </li>
                                               <li class="waves-effect"><a href="#!">6</a> </li>
                                               <li class="waves-effect"><a href="#!">7</a> </li>
                                               <li class="waves-effect"><a href="#!">8</a> </li>
                                               <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a> </li>
   </ul>-->
                                    </div>
                                </div>
                                <!--LISTINGS END-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MOBILE APP-->
    <section class="web-app com-padd">
        <div class="container">
            <div class="row">
                <div class="col-md-6 web-app-img"> <img src="../front/images/mobile.png" alt="" /> </div>
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
                    <a href="#"><img src="../front/images/android.png" alt="" /> </a>
                    <a href="#"><img src="../front/images/apple.png" alt="" /> </a>
                </div>
            </div>
        </div>
    </section>
   

    @endsection
