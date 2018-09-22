@extends('layout.app')
	
@include('inc.headerAfterLogin')

@section('content')

	<!-- banner -->
	<div class="banner">
			<div class="container">
				<h3 style="padding-left: 60px;">Book Portal, <span>Your World</span></h3>
			</div>
	</div>
	<!-- //banner --> 

	<!-- banner-bottom -->
	<div class="banner-bottom">
			<div class="container">
				<div class="top-brands">
				<h3>Hot Books</h3></div>
				<div class="col-md-5 wthree_banner_bottom_left">
					<img src="{{('http://1.bp.blogspot.com/-53-Vqn14Hf8/UVEbaggKdtI/AAAAAAAAJr8/dv5p4LibRVk/s1600/most+recommended+ya+reads.jpg')}}" alt=" " class="img-responsive" />
						
				</div>
				<div class="col-md-7 wthree_banner_bottom_right">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Drama</a></li>
							<li role="presentation"><a href="#thriller" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Thriller</a></li>
							<li role="presentation"><a href="#romance" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Romance</a></li>
							<li role="presentation"><a href="#action" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">Action</a></li>
							<li role="presentation"><a href="#sci-fi" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Sci-Fi</a></li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
								<div class="agile_ecommerce_tabs">
									<div class="col-md-4 agile_ecommerce_tab_left">
										<div class="hs-wrapper">
											<img src="{{('images/3.jpg')}}" alt=" " />
											<!--<div class="w3_hs_bottom">
												<ul>
													<li>
														<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
													</li>
												</ul>
											</div>-->
										</div> 
										<h5><a href="#">Mobile Phone1</a></h5>
										<div class="simpleCart_shelfItem">
											<p>Author</p>
											<p>Publisher</p>
											<button type="submit" class="w3ls-cart" href='#'>View More</button> 
										</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
										<div class="hs-wrapper">
											<img src="{{('images/3.jpg')}}" alt=" " />
											<!--<div class="w3_hs_bottom">
												<ul>
													<li>
														<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
													</li>
												</ul>
											</div>-->
										</div> 
										<h5><a href="#">Mobile Phone1</a></h5>
										<div class="simpleCart_shelfItem">
											<p>Author</p>
											<p>Publisher</p>
											<button type="submit" class="w3ls-cart" href='#'>View More</button> 
										</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
										<div class="hs-wrapper">
											<img src="{{('images/3.jpg')}}" alt=" " />
											<!--<div class="w3_hs_bottom">
												<ul>
													<li>
														<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
													</li>
												</ul>
											</div>-->
										</div> 
										<h5><a href="#">Mobile Phone1</a></h5>
										<div class="simpleCart_shelfItem">
											<p>Author</p>
											<p>Publisher</p>
											<button type="submit" class="w3ls-cart" href='#'>View More</button> 
										</div>
									</div>

									<div class="clearfix"> </div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="thriller" aria-labelledby="audio-tab">
								<div class="agile_ecommerce_tabs">
										<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/9.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
										</div>

										<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/9.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
										</div>

										<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/9.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
										</div>

									<div class="clearfix"> </div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="romance" aria-labelledby="video-tab">
								<div class="agile_ecommerce_tabs">
									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/11.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/11.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/11.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="clearfix"> </div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="action" aria-labelledby="tv-tab">
								<div class="agile_ecommerce_tabs">
									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/14.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
												<img src="{{('images/14.jpg')}}" alt=" " />
												<!--<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>-->
											</div> 
											<h5><a href="#">Mobile Phone1</a></h5>
											<div class="simpleCart_shelfItem">
												<p>Author</p>
												<p>Publisher</p>
												<button type="submit" class="w3ls-cart" href='#'>View More</button> 
											</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
											<div class="hs-wrapper">
												<img src="{{('images/14.jpg')}}" alt=" " />
												<!--<div class="w3_hs_bottom">
													<ul>
														<li>
															<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
														</li>
													</ul>
												</div>-->
											</div> 
											<h5><a href="#">Mobile Phone1</a></h5>
											<div class="simpleCart_shelfItem">
												<p>Author</p>
												<p>Publisher</p>
												<button type="submit" class="w3ls-cart" href='#'>View More</button> 
											</div>
									</div>

									<div class="clearfix"> </div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="sci-fi" aria-labelledby="kitchen-tab">
								<div class="agile_ecommerce_tabs">
									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/17.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/17.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="col-md-4 agile_ecommerce_tab_left">
												<div class="hs-wrapper">
													<img src="{{('images/17.jpg')}}" alt=" " />
													<!--<div class="w3_hs_bottom">
														<ul>
															<li>
																<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
															</li>
														</ul>
													</div>-->
												</div> 
												<h5><a href="#">Mobile Phone1</a></h5>
												<div class="simpleCart_shelfItem">
													<p>Author</p>
													<p>Publisher</p>
													<button type="submit" class="w3ls-cart" href='#'>View More</button> 
												</div>
									</div>

									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
	<!-- //banner-bottom --> 
	
	<!-- Top Picks -->
	<div class="new-products">
		<div class="container">
			<h3>Drama</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="{{('images/25.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/23.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/24.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/22.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/26.jpg')}}" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Laptops</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$520</span> <i class="item_price">$500</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Red Laptop"> 
								<input type="hidden" name="amount" value="500.00">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="{{("images/27.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/28.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/29.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/30.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/31.jpg")}}" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Black Phone</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$380</span> <i class="item_price">$370</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Black Phone"> 
								<input type="hidden" name="amount" value="370.00">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="{{('images/34.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/33.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/32.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/35.jpg')}}" alt=" " class="img-responsive" />
							<img src="{{('images/36.jpg')}}" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Kids Toy</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$150</span> <i class="item_price">$100</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Kids Toy"> 
								<input type="hidden" name="amount" value="100.00">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>  
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="{{("images/37.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/38.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/39.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/40.jpg")}}" alt=" " class="img-responsive" />
							<img src="{{("images/41.jpg")}}" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="single.html">Induction Stove</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$280</span> <i class="item_price">$250</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Induction Stove"> 
								<input type="hidden" name="amount" value="250.00">   
								<button type="submit" class="w3ls-cart">Add to cart</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //Top Picks -->

	<!--Famous author -->
	<div class="top-brands">
		<div class="container">
			<h3>Thriller</h3>
			<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/25.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/23.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/24.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/22.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/26.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Laptops</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$520</span> <i class="item_price">$500</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Red Laptop"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/27.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/28.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/29.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/30.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/31.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Black Phone</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$370</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Black Phone"> 
									<input type="hidden" name="amount" value="370.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/34.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/33.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/32.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/35.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/36.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Kids Toy</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$150</span> <i class="item_price">$100</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kids Toy"> 
									<input type="hidden" name="amount" value="100.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>  
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/37.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/38.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/39.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/40.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/41.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Induction Stove</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			
		</div>
	</div>
	<!-- //Famous author --> 
	
	<!-- Top Picks -->
	<div class="new-products">
			<div class="container">
				<h3>Romance</h3>
				<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/25.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/23.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/24.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/22.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/26.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Laptops</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$520</span> <i class="item_price">$500</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Red Laptop"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/27.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/28.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/29.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/30.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/31.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Black Phone</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$370</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Black Phone"> 
									<input type="hidden" name="amount" value="370.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/34.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/33.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/32.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/35.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/36.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Kids Toy</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$150</span> <i class="item_price">$100</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kids Toy"> 
									<input type="hidden" name="amount" value="100.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>  
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/37.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/38.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/39.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/40.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/41.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Induction Stove</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	<!-- //Top Picks -->
	
	<!--Famous author -->
	<div class="top-brands">
			<div class="container">
				<h3>Action</h3>
				<div class="agileinfo_new_products_grids">
						<div class="col-md-3 agileinfo_new_products_grid">
							<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
								<div class="hs-wrapper hs-wrapper1">
									<img src="{{('images/25.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/23.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/24.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/22.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/26.jpg')}}" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Laptops</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$520</span> <i class="item_price">$500</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Red Laptop"> 
										<input type="hidden" name="amount" value="500.00">   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-3 agileinfo_new_products_grid">
							<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
								<div class="hs-wrapper hs-wrapper1">
									<img src="{{("images/27.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/28.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/29.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/30.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/31.jpg")}}" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Phone</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$380</span> <i class="item_price">$370</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Black Phone"> 
										<input type="hidden" name="amount" value="370.00">   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-3 agileinfo_new_products_grid">
							<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
								<div class="hs-wrapper hs-wrapper1">
									<img src="{{('images/34.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/33.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/32.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/35.jpg')}}" alt=" " class="img-responsive" />
									<img src="{{('images/36.jpg')}}" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Kids Toy</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$150</span> <i class="item_price">$100</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Kids Toy"> 
										<input type="hidden" name="amount" value="100.00">   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div>  
							</div>
						</div>
						<div class="col-md-3 agileinfo_new_products_grid">
							<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
								<div class="hs-wrapper hs-wrapper1">
									<img src="{{("images/37.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/38.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/39.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/40.jpg")}}" alt=" " class="img-responsive" />
									<img src="{{("images/41.jpg")}}" alt=" " class="img-responsive" /> 
									<div class="w3_hs_bottom w3_hs_bottom_sub">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Induction Stove</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$280</span> <i class="item_price">$250</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="1"> 
										<input type="hidden" name="w3ls_item" value="Induction Stove"> 
										<input type="hidden" name="amount" value="250.00">   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				
			</div>
	</div>
	<!-- //Famous author -->

	<!-- Top Picks -->
	<div class="new-products">
			<div class="container">
				<h3>Science Fiction</h3>
				<div class="agileinfo_new_products_grids">
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/25.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/23.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/24.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/22.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/26.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Laptops</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$520</span> <i class="item_price">$500</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Red Laptop"> 
									<input type="hidden" name="amount" value="500.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/27.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/28.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/29.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/30.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/31.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Black Phone</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">$370</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Black Phone"> 
									<input type="hidden" name="amount" value="370.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{('images/34.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/33.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/32.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/35.jpg')}}" alt=" " class="img-responsive" />
								<img src="{{('images/36.jpg')}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Kids Toy</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$150</span> <i class="item_price">$100</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Kids Toy"> 
									<input type="hidden" name="amount" value="100.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>  
						</div>
					</div>
					<div class="col-md-3 agileinfo_new_products_grid">
						<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
							<div class="hs-wrapper hs-wrapper1">
								<img src="{{("images/37.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/38.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/39.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/40.jpg")}}" alt=" " class="img-responsive" />
								<img src="{{("images/41.jpg")}}" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom w3_hs_bottom_sub">
									<ul>
										<li>
											<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5><a href="single.html">Induction Stove</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	<!-- //Top Picks -->
@include('inc.footer')