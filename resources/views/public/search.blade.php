@extends('public.layout.app')
@section('section_menu') 
 <section class="bottomMenu dir-il-top-fix">
@endsection
@section('content') 
<style>
   .pagination li.active {
        padding: 6px;
    border-radius: 8px;
    }
    /*.tourz-search-form{    margin-right: -192px;}*/
</style>
<body>
	<!--PRE LOADING-->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<!--BANNER AND SERACH BOX-->
	<section id="background" class="dir1-home-head">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="dir-ho-tl">
						<ul>
							<li>
								<a href="main.html"><img src="images/logo.png" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="dir-ho-tr">
						<ul>
							<li><a href="register.html">Register</a> </li>
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
<!--							<input type="text"  id="select-city" class="autocomplete">
							<label for="select-city">Enter city</label>
                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
						</div>
						<div class="input-field">
							<input type="text" name="name" id="select-search" class="autocomplete">
                            <label for="select-search" id="label-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
						</div>
						<div class="input-field">
							<!--<input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn">--> 
                                                        
                                                          {!! Form::submit('search', ['class' => 'waves-effect waves-light tourz-sear-btn']) !!}</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--TOP SEARCH SECTION-->
        <!--BEST THINGS-->
	<section class="com-padd com-padd-redu-bot1">
		<div class="container dir-hom-pre-tit">
			<div class="row">
				<div class="com-title">
					<h2>Top Trendings for <span>your City</span></h2>
					<p>Explore some of the best tips from around the world from our partners and friends.</p>
				</div>
				
						<!--POPULAR LISTINGS-->
                                                @if(count($searchProducts))
                                                @foreach($searchProducts as $searchProduct)
                                                <div class="col-md-6">
					<div>
						<div class="home-list-pop">
							<!--POPULAR LISTINGS IMAGE-->
							<div class="col-md-3"> {!!$searchProduct->logo ? '<img src="../uploads/products/'.$searchProduct->logo.'" alt=""/>':''!!} </div>
							<!--POPULAR LISTINGS: CONTENT-->
							<div class="col-md-9 home-list-pop-desc"> <a href="/product_list/{{$searchProduct->id}}"><h3>{{$searchProduct->name_en }}</h3></a>
								
								<p>{{$searchProduct->address}}</p> 
                                                                
                                                                <span class="home-list-pop-rat">{{$searchProduct->total_rate}}</span>
								<div class="hom-list-share">
									<ul>
										<li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
										<li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
										<li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> {{$searchProduct->count_view}}</a> </li>
										<li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
									</ul>
								</div>
							</div>
						</div>
                                               	</div>
				</div>
                                               
                                                @endforeach
                                                 @endif
                                                  
<!--						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="images/services/tr2.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="images/services/tr3.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="images/services/s4.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						</div>-->
				
<!--				<div class="col-md-6">
					<div>
						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="images/services/s5.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="images/services/s6.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						POPULAR LISTINGS
						<div class="home-list-pop">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="front/images/services/s7.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
						POPULAR LISTINGS
						<div class="home-list-pop mar-bot-red-0">
							POPULAR LISTINGS IMAGE
							<div class="col-md-3"> <img src="front/images/services/s8.jpg" alt="" /> </div>
							POPULAR LISTINGS: CONTENT
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
				</div>-->
			</div>
                    @if(count($searchProducts))
                    {{ $searchProducts->links() }}
                    @endif
		</div>
            
	</section>
        
	<!--CREATE FREE ACCOUNT-->
            @endsection('content') 