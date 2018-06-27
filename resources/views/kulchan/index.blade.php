@extends('frontend.layout.main')

@section('content')
    <!-- Frontpage Slider -->
    <div class="frontslider-wrap">
        <div class="responisve-container">
            <div class="slider" id="front-slider">
                <div class="slide">
                    <img 	src="http://placehold.it/650x346"
                            data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
                    <p 		class="caption1"
                              data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">AMERICAN</p>
                    <p 		class="caption2"
                              data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LEGENDS</p>
                </div>
                <div class="slide">
                    <img 	src="http://placehold.it/544x330"
                            data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
                    <p 		class="caption1"
                              data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">OFFROAD</p>
                    <p 		class="caption2"
                              data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">KING</p>
                </div>
                <div class="slide">
                    <img 	src="http://placehold.it/600x391"
                            data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
                    <p 		class="caption1"
                              data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">DREAM</p>
                    <p 		class="caption2"
                              data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CARS</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Categories List -->
    <div class="cont">
        <ul class="frontcategs">
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg1.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg1h.png')}}" alt="">
			</span>
                    <p>Automobiles</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg2.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg2h.png')}}" alt="">
			</span>
                    <p>Motorcycles</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg3.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg3h.png')}}" alt="">
			</span>
                    <p>ATVs</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg4.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg4h.png')}}" alt="">
			</span>
                    <p>Snowmobiles</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg5.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg5h.png')}}" alt="">
			</span>
                    <p>UTVs</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg6.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg6h.png')}}" alt="">
			</span>
                    <p>Scooters</p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
			<span class="frontcategs-img">
				<img src="{{asset('frontend/img/front-categories/frcateg7.png')}}" alt="">
				<img src="{{asset('frontend/img/front-categories/frcateg7h.png')}}" alt="">
			</span>
                    <p>Watercrafts</p>
                </a>
            </li>
        </ul>
    </div>


    <!-- Frontpage Filter -->
    <div class="frontsearch-wrap">
        <div class="cont frontsearch">
            <h2>Search</h2>
            <p class="frontsearch-count">21900 ITEMS</p>
            <div class="frontsearch-wrap">
                <div class="frontsearch-selects">
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">Motorcycles</p>
                        <ul class="dropdown-list">
                            <li>
                                <a href="#">Choose Type</a>
                            </li>
                            <li>
                                <a href="#">Automobiles</a>
                            </li>
                            <li class="active">
                                <a href="#">Motorcycles</a>
                            </li>
                            <li>
                                <a href="#">ATVs</a>
                            </li>
                            <li>
                                <a href="#">Snowmobiles</a>
                            </li>
                            <li>
                                <a href="#">UTVs</a>
                            </li>
                            <li>
                                <a href="#">Scooters</a>
                            </li>
                            <li>
                                <a href="#">Watercrafts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">Enzo</p>
                        <ul class="dropdown-list">
                            <li>
                                <a href="#">Choose Model</a>
                            </li>
                            <li>
                                <a href="#">Jetmax</a>
                            </li>
                            <li>
                                <a href="#">Speeder</a>
                            </li>
                            <li>
                                <a href="#">PCG</a>
                            </li>
                            <li>
                                <a href="#">Sanchez</a>
                            </li>
                            <li>
                                <a href="#">Vader</a>
                            </li>
                            <li class="active">
                                <a href="#">Enzo</a>
                            </li>
                            <li>
                                <a href="#">Nex</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">GT-Z600</p>
                        <ul class="dropdown-list">
                            <li>
                                <a href="#">Choose Version</a>
                            </li>
                            <li>
                                <a href="#">GT-Z10</a>
                            </li>
                            <li>
                                <a href="#">GT-Z400</a>
                            </li>
                            <li class="active">
                                <a href="#">GT-Z600</a>
                            </li>
                            <li>
                                <a href="#">H-200</a>
                            </li>
                            <li>
                                <a href="#">H-300</a>
                            </li>
                            <li>
                                <a href="#">F10</a>
                            </li>
                            <li>
                                <a href="#">F20</a>
                            </li>
                            <li>
                                <a href="#">A120</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
                        <p id="range_year_ttl" class="dropdown-title frontsearch-select-ttl">2013 - 2016</p>
                        <ul class="dropdown-list">
                            <li>
                                <input type="text" id="range_year" value="">
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
                        <p id="range_cost_ttl" class="dropdown-title frontsearch-select-ttl">$200 - $14.000</p>
                        <ul class="dropdown-list">
                            <li>
                                <input type="text" id="range_cost" value="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="frontsearch-cont" id="frontsearch-cont">
                    <p class="frontsearch-img">
                        <img src="http://placehold.it/592x390" alt="">
                    </p>
                    <p class="frontsearch-model">GT-Z600</p>

                    <div class="frontsearch-res frontsearch-res1"><a href="catalog.html"><span>260</span> Hand Controls</a></div>
                    <div class="frontsearch-point frontsearch-point1"></div>

                    <div class="frontsearch-res frontsearch-res2"><a href="catalog.html"><span>14</span> Seats</a></div>
                    <div class="frontsearch-point frontsearch-point2"></div>

                    <div class="frontsearch-res frontsearch-res3"><a href="catalog.html"><span>2</span> Windshields</a></div>
                    <div class="frontsearch-point frontsearch-point3"></div>

                    <div class="frontsearch-res frontsearch-res4"><a href="catalog.html">Exhausts <span>103</span></a></div>
                    <div class="frontsearch-point frontsearch-point4"></div>

                    <div class="frontsearch-res frontsearch-res5"><a href="catalog.html"><span>267</span> Lightings</a></div>
                    <div class="frontsearch-point frontsearch-point5"></div>

                    <div class="frontsearch-res frontsearch-res6"><a href="catalog.html">Brake Shoes <span>6</span></a></div>
                    <div class="frontsearch-point frontsearch-point6"></div>

                    <div class="frontsearch-res frontsearch-res7"><a href="catalog.html"><span>34</span> Wheels</a></div>
                    <div class="frontsearch-point frontsearch-point7"></div>

                    <div class="frontsearch-res frontsearch-res8"><a href="catalog.html"><span>874</span> Engines</a></div>
                    <div class="frontsearch-point frontsearch-point8"></div>

                    <div class="frontsearch-res frontsearch-res9"><a href="catalog.html"><span>54</span> Filtres</a></div>
                    <div class="frontsearch-point frontsearch-point9"></div>

                    <div class="frontsearch-res frontsearch-res10"><a href="catalog.html"><span>15</span> Tires</a></div>
                    <div class="frontsearch-point frontsearch-point10"></div>

                </div>
            </div>
            <span class="frontsearch-line1"></span>
            <span class="frontsearch-line2"></span>
        </div>
    </div>




    <!-- Special Deals Items -->
    <div class="specials-wrap">
        <div class="cont specials">
            <h2>Special Deals</h2>
            <p class="specials-count">350 ITEMS</p>
            <div class="specials-list">
                <div class="special special-pseudo">
                    <a href="#" class="special-link"></a>
                </div>
                <div class="special special-first">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/385x195" alt="">
                        </p>
                        <h3><span>Nulla lacinia lectus</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Suspensions</a>
                        <span class="special-price">$200</span>
                        <del>$400</del>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/195x195" alt="">
                        </p>
                        <h3><span>Praesent amet mollis</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Brakes</a>
                        <span class="special-price">$312</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/190x190" alt="">
                        </p>
                        <h3><span>Mauris suscipit tellus</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Gauges</a>
                        <span class="special-price">$230.50</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/203x167" alt="">
                        </p>
                        <h3><span>Suspendisse lobortis</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Filters</a>
                        <span class="special-price">$1290</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/192x208" alt="">
                        </p>
                        <h3><span>Nam iaculis risus nisi</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Sprockets</a>
                        <span class="special-price">$1180</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/180x300" alt="">
                        </p>
                        <h3><span>Sed fermentum elit</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Spark Plugs</a>
                        <span class="special-price">$305</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="special">
                    <a href="product.html" class="special-link">
                        <p class="special-img">
                            <img src="http://placehold.it/300x120" alt="">
                        </p>
                        <h3><span>Mauris suscipit tellus</span></h3>
                    </a>
                    <p class="special-info">
                        <a href="#" class="special-categ">Springs</a>
                        <span class="special-price">$230.30</span>
                        <a href="#" class="special-add">+ Add to cart</a>
                    </p>
                </div>
            </div>
            <p class="special-more">
                <a href="#">show more</a>
            </p>
            <span class="special-line1"></span>
            <span class="special-line2"></span>
        </div>
    </div>



    <!-- Get a Special Deals -->
    <div class="getspec-wrap">
        <div class="cont getspec">
            <div class="getspec-cont">
                <h3>Winter is coming</h3>
                <p>New snowmobile parts</p>
                <form action="#" class="form-validate">
                    <input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email3">
                    <input type="submit" value="Get a special deals">
                </form>
            </div>
            <a href="#" class="getspec-img">
                <img src="http://placehold.it/573x319" alt="">
            </a>
        </div>
    </div>



    <!-- Popular Items -->
    <div class="populars-wrap">
        <div class="cont populars">
            <h2>Popular</h2>
            <p class="populars-count">7 ITEMS</p>
            <div class="populars-list">
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/203x190" alt="">
                        </p>
                        <h3><span>Suspendisse lobortis</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Helmets</a>
                        <span class="popular-price">$290</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/189x163" alt="">
                        </p>
                        <h3><span>Nulla lacinia lectus</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Filtres</a>
                        <span class="popular-price">$1180</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/270x187" alt="">
                        </p>
                        <h3><span>Praesent amet mollis</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Batteries</a>
                        <span class="popular-price">$312</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/185x193" alt="">
                        </p>
                        <h3><span>Mauris suscipit tellus</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Boots</a>
                        <span class="popular-price">$230.50</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/224x189" alt="">
                        </p>
                        <h3><span>Suspendisse lobortis</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Breaks</a>
                        <span class="popular-price">$1290</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/193x217" alt="">
                        </p>
                        <h3><span>Nam iaculis risus nisi</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Bearings</a>
                        <span class="popular-price">$1180</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/270x176" alt="">
                        </p>
                        <h3><span>Sed fermentum elit</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Parts</a>
                        <span class="popular-price">$305</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
                <div class="popular">
                    <a href="product.html" class="popular-link">
                        <p class="popular-img">
                            <img src="http://placehold.it/350x176" alt="">
                        </p>
                        <h3><span>Mauris suscipit tellus</span></h3>
                    </a>
                    <p class="popular-info">
                        <a href="#" class="popular-categ">Lights</a>
                        <span class="popular-price">$230.30</span>
                        <a href="#" class="popular-add">+ Add to cart</a>
                    </p>
                </div>
            </div>
            <p class="popular-more">
                <a href="#">show more</a>
            </p>
            <span class="popular-line1"></span>
            <span class="popular-line2"></span>
        </div>
    </div>


    <!-- Frontpage Article -->
    <div class="botarticle-wrap">
        <div class="cont botarticle">
            <div class="botarticle-cont">
                <h3>Kings of the dirt</h3>
                <p>Best motocross gear</p>
                <a href="#" class="botarticle-more">Read more</a>
            </div>
            <a href="blog.html" class="botarticle-img">
                <img src="http://placehold.it/600x357" alt="">
            </a>
        </div>
    </div>

    @endsection