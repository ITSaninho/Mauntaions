		<nav class="navbar fixed-top navbar-expand-lg navbar-light" ng-init="init()">
			<div class="container">
				<a class="navbar-brand" href="#header"><img alt="some image" src="/assets/img/logo.png" class="img-fluid"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse w-75 justify-content-between" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link" href="#about-us">About us <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#journal">Our journal</a>
						<a class="nav-item nav-link" href="#work">How we work</a>
						<a class="nav-item nav-link" href="#travel">Travel with us</a> 
						<a class="nav-item nav-link" href="#gallery">Gallery</a>
						<a class="nav-item nav-link" href="#comments">Feedbacks</a>
						<a class="nav-item nav-link" href="#contacts">Contacts</a>
					</div>

					<button class="btn btn-outline-primary" id="sign-in-button" data-toggle="modal" data-target="#sign-in-modal">Sign In</button>
				</div>
			</div>
		</nav> 
		
		<!-- ================================= HEADER =================================== -->

			<div class="container-fluid">
				<div class="header" id="header">
					<div class="container">
						<div class="header-desc">
							<img alt="some image" src="/assets/img/travel.png" class="img-fluid mb-2">

							<div class="row ">
								<div class="col-sm-8 col-md-6 mb-3">
									<span>
											@{{ allData.header[0].description }}
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-md-3 col-sm-12">
									<button class="btn btn-info">@{{ allData.header[0].button_value }}</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ================================= ABOUT-US =================================== -->
			
			<div class="container-fluid">
				<div class="about-us" id="about-us">
					<div class="container h-100">
						<div class="row h-100 align-items-center">
							<div class="col-md-4 col-sm-12">
								<div class="row pl-3">
									<img alt="some image" src="/assets/img/waves.png" class="img-fluid waves">	
								</div>

								<div class="row mt-4 pl-3">
									<span class="about-head">@{{ allData.about[0].title }}</span>
								</div>

								<div class="row mb-4 pl-3">
									<span class="about-desc">
										@{{ allData.about[0].description }}
									</span>
								</div>
							</div>

						<!-- 	<div class="col images d-none d-md-flex">
							<img alt="some image" ng-src="@{{ aboutUs.pictures[0] }}" class="img-fluid" id="big-image">
							<img alt="some image" ng-src="@{{ aboutUs.pictures[1] }}" class="img-fluid" id="small-image">
						</div> -->

							<div class="col-12 d-sm-block d-md-none pt-3">
								<div id="about-carousel" class="carousel slide" data-ride="carousel">
								  <ol class="carousel-indicators">
								    <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
								    <li data-target="#about-carousel" data-slide-to="1"></li>
								    <li data-target="#about-carousel" data-slide-to="2"></li>
								  </ol>

								  <div class="carousel-inner">
								    <div class="carousel-item active">
								      <img class="d-block w-100" src="/assets/img/about-pic1.png" alt="First slide">
								    </div>

								    <div class="carousel-item">
								      <img class="d-block w-100" src="/assets/img/about-pic2.png" alt="Second slide">
								    </div>

								    <div class="carousel-item">
								      <img class="d-block w-100" src="/assets/img/about-pic3.png" alt="Second slide">
								    </div>
								    
									  <a class="carousel-control-prev" href="#about-carousel" role="button" data-slide="prev">
									    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#about-carousel" role="button" data-slide="next">
									    <span class="carousel-control-next-icon" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									  </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ================================= JOURNAL =================================== -->	
			
			<div class="container-fluid mb-5">
				<div class="journal" id="journal">
					<div class="container h-100">
						<div class="row justify-content-center mt-5">
							<img alt="some image" src="/assets/img/waves.png" class="img-fluid">
						</div>

						<div class="row justify-content-center mt-4">
							<span class="journal-title">Our journal</span>
						</div>
					
						<div class="row justify-content-center">
							<div class="col-12 text-center">
								<div class="journal-holder">
									<div class="row first-row">
										<div class="col post d-flex justify-content-center">
											<div class="arrow-left"></div>

											<img alt="some image" ng-src="@{{ '/assets/img/' + allData.journal[0].icon}}" class="img-fluid j-icon align-self-center">

										</div>
										<div class="col post">
											<div class="row my-2 justify-content-center">
												<span class="title">@{{ allData.journal[0].title }}</span>
											</div>

											<div class="row justify-content-center">
												<p class="head w-100">
													@{{ allData.journal[0].description }}
												</p>
											</div>

											<div class="row justify-content-center px-3 text-center">
												<p class="desc">
													@{{ allData.journal[0].text }}
												</p>
											</div>

											<div class="row text-center justify-content-center">
												<span class="number">01</span>
											</div>

										</div>
										<div class="col post d-none d-md-flex justify-content-center" id="water-image">
											<div class="arrow-up"></div>

											<img alt="some image" ng-src="@{{ '/assets/img/' + allData.journal[2].icon}}" class="img-fluid j-icon align-self-center">
										</div>
									</div>

									<div class="row second-row">
										<div class="col post">
											<div class="row my-2 justify-content-center">
												<span class="title">@{{ allData.journal[1].title }}</span>
											</div>

											<div class="row justify-content-center">
												<p class="head w-100">
													@{{ allData.journal[1].description }}
												</p>
											</div>

											<div class="row justify-content-center px-3 text-center">
												<p class="desc">
													@{{ allData.journal[1].text }}
												</p>
											</div>

											<div class="row text-center justify-content-center">
												<span class="number">02</span>
											</div>
										</div>

										<div class="col post d-flex justify-content-center">
											<div class="arrow-right"></div>

											<img alt="some image" ng-src="@{{ '/assets/img/' + allData.journal[1].icon}}" class="img-fluid j-icon align-self-center">
										</div>

										<div class="col post d-none d-md-flex justify-content-center">
											<div class="col post">
												<div class="row my-2 justify-content-center">
													<span class="title">@{{ allData.journal[2].title }}</span>
												</div>

												<div class="row justify-content-center mb-3	">
													<p class="head w-100">
														@{{ allData.journal[2].description }}
													</p>
												</div>

												<div class="row justify-content-center px-3 text-center">
													<p class="desc">
														@{{ allData.journal[2].text }}
													</p>
												</div>

												<div class="row text-center justify-content-center">
													<span class="number">03</span>
												</div>
											</div>
										</div>
									</div>

									<div class="row d-md-none d-sm-flex third-row">
										<div class="col post d-flex justify-content-center" id="water-image">
											<div class="arrow-left"></div>
											<img alt="some image" ng-src="@{{ '/assets/img/' + allData.journal[1].icon}}" class="img-fluid j-icon align-self-center">
										</div>

										<div class="col post">
											<div class="row my-2 justify-content-center">
												<span class="title">@{{ allData.journal[2].title }}</span>
											</div>

											<div class="row justify-content-center mb-3	">
												<p class="head w-100">
													@{{ allData.journal[2].description }}
												</p>
											</div>

											<div class="row justify-content-center px-3 text-center">
												<p class="desc">
													@{{ allData.journal[2].text }}
												</p>
											</div>

											<div class="row text-center justify-content-center">
												<span class="number">03</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ================================= WANNA-GO =================================== -->	

			<div class="wanna-go" id="wanna-go">
				<div class="container h-100">
					<div class="row h-100 align-items-center mt-3">
						<div class="col-md-6 col-sm-12 wanna-go-content">
							<div class="row mb-4">
								<div class="col-md-4">
									<img alt="some image" src="/assets/img/waves.png">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<span class="wanna-go-head">@{{ allData.wanna[0].title }}</span>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<p class="go-desc">
										@{{ allData.wanna[0].description }}
									</p>
								</div>
							</div>
							
							<form name="orderForm" method="post" novalidate="novalidate">	 
								<div class="row" id="go-form-container">
									<form class="w-100" novalidate="novalidate">
										<div class="row">
											<div class="col-md-4 col-sm-12">
												<input type="text"  name="name" class="form-control" placeholder="Your name:" id ="go-input-name"
												 ng-maxlength="20" required="required" ng-model="order.name" ng-pattern="namePattern">
											</div>
								
											<div class="divider align-self-center d-none d-md-block"></div>
								
											<div class="col-md-4 col-sm-12">
												<input type="text" name="phone" class="form-control" required="required" placeholder="Your phone:" ng-model="order.phone"
												ng-pattern="phonePattern" ng-maxlength="10" id="go-input-phone">
											</div>
								
											<div class="col-md-2 col-sm-12 submit-button align-self-center ">
												<button ng-click="saveOder()" class="btn btn-info">order now</button>
											</div>
										</div>
									</form>
								</div>
							</form>	

							<div class="row mt-3 blue-text">
								<div class="col-12">
									<i class="fa fa-lock" aria-hidden="true"></i>
									<span class="ml-3">* Your data will not be transfered</span>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>

			<!-- ================================= WORK =================================== -->

			<div class="container-fluid">
				<div class="work" id="work">
					<div class="container">
						<div class="row mb-4">
							<div class="col text-center">
								<img alt="some image" src="/assets/img/waves.png">	
							</div>
						</div>

						<div class="row">
							<div class="col text-center">
								<p class="work-title">How we work</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 col-sm-6 mb-5">
								<div class="d-flex justify-content-center">
									<div class="circle d-flex justify-content-center align-items-center">
										1
									</div>

									<div class="v-dash"></div>

									<div class="dash d-md-flex d-none"></div>
								</div>

								<div class="row justify-content-center">
									<div class="circle-holder d-flex justify-content-center align-items-center">
										<div class="hex d-flex justify-content-center align-items-center"></div>

										<div class="hex-text">
											<img alt="some image" src="/assets/img/doc-icon.png" class="img-fluid">
										</div>
									</div>
								</div>

								<div class="row justify-content-center mt-4">
									<div class="col text-center">
										<span class="desc">
											<b>@{{ allData.work[0].title }}</b> <br> 
											@{{ allData.work[0].description }}
										</span>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 mb-5" ng-repeat="item in allData.work | limitTo: (1 - allData.work.length)">
								<div class="d-flex justify-content-center">
									<div class="circle d-flex justify-content-center align-items-center">
										@{{ $index + 2 }}
									</div>

									<div class="v-dash"></div>
								</div>

								<div class="row justify-content-center">
									<div class="circle-holder d-flex justify-content-center align-items-center">
										<div class="hex d-flex justify-content-center align-items-center"></div>
										<div class="hex-text">
											<img alt="some image" ng-src="@{{ '/assets/img/' + item.img }}" class="img-fluid">
										</div>
									</div>
								</div>

								<div class="row justify-content-center mt-4">
									<div class="col text-center">
										<span class="desc">
											<b>@{{ item.title }}</b> <br> 
											@{{ item.description }}
										</span>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>

			<!-- ================================= TRAVEL =================================== -->

			<div class="container-fluid">
				<div class="travel mt-5" id="travel">
					<div class="container">
						<div class="row travel-row">
							<div class="col-12 text-center travel-title">
								<img alt="some image" src="/assets/img/waves.png">
								<p>Travel with us</p>	
							</div>
						</div>

						<div class="row travel-carousel-indicators">
							<div class="col text-center">
									<ol class="carousel-indicators">
										<li class="active"></li>
										<li></li>
										<li></li>
										<li></li>
										<li></li>
									</ol>
								</div>
						</div>

						<div class="row">
							<div id="travel-carousel" class="carousel slide w-100" data-ride="carousel" data-interval="4000">
				        <div class="carousel-inner row w-100 mx-auto" role="listbox">
			            <div class="carousel-item col-md-3 col-sm-12" ng-repeat="item in allData.travel" ng-class="{'active': item.title == 'Alps'}">
		                <img class="img-fluid mx-auto d-block" ng-src="@{{ '/assets/img/' + item.img }}" alt="slide 1">

		                <div class="car-desc d-flex flex-column justify-content-between">
											<div class="row ml-3">
												<i class="fa fa-star" aria-hidden="true" ng-repeat="star in getRatingStars(item.rating) track by $index"></i>
											</div>

											<div class="row align-items-center">
												<div class="col text-center">
													<span class="img-name">@{{ item.title }}</span> <br><span class="img-desc mx-2">@{{ item.description }}</span>
												</div>
											</div>

											<div class="row prices align-items-center">
												<div class="col-12">
													<del class="float-left mt-2 ml-3">@{{ item.price }}$</del>
													<b class="float-right mr-2">@{{ item.last_price }}$</b>
												</div>
											</div>
										</div>
			            </div>
				        </div>
		    			</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ================================= GALLERY =================================== -->

			<div class="gallery" id="gallery">
				<div class="container">
					<div class="row">
						<div class="col text-center gallery-title">
							<img alt="some image" src="/assets/img/waves.png">
							<p>Gallery</p>	
						</div>
					</div>

					<div class="row gallery-content">
						<div class="col-md-3 col-sm-12 d-flex justify-content-between flex-column order-1">
							<img alt="some image" src="/assets/img/gallery-pic1.png" class="img-fluid gallery-image">
							<img alt="some image" src="/assets/img/gallery-pic2.png" class="img-fluid gallery-image">
						</div>

						<div class="col-md-4 col-sm-12 d-flex justify-content-between flex-column order-2">
							<img alt="some image" src="/assets/img/gallery-pic3.png" class="img-fluid gallery-image">
							<img alt="some image" src="/assets/img/gallery-pic4.png" class="img-fluid gallery-image">
						</div>

						<div class="col-md-5 col-sm-12 d-flex justify-content-between flex-column order-3">
							<img alt="some image" src="/assets/img/gallery-pic5.png" class="img-fluid gallery-image order-6">
							<img alt="some image" src="/assets/img/gallery-pic6.png" class="img-fluid gallery-image order-5">
						</div>
					</div>
				</div>

			<!-- ================================= ICONS =================================== -->

				<div class="container-fluid icons">
					<div class="container h-100">
						<div class="row d-md-flex d-none justify-content-between px-3">
							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/slack.png" class="img-fluid"> <b>slack</b>
								</a>
							</div>
					
							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/adobe.png" class="img-fluid">
								</a>
							</div>
				
							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/google.png" class="img-fluid">
								</a>
							</div>
			
							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/facebook.png" class="img-fluid">
								</a>
							</div>
				
							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/spotify.png" class="img-fluid">
								</a>
							</div>

							<div class="item">
								<a href="javascript:;">
									<img alt="some image" src="/assets/img/nike.png" class="img-fluid">
								</a>
							</div>
						</div>

						<div id="logo-carousel" class="carousel slide d-sm-block d-md-none" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <div class="row d-flex justify-content-around px-4">
						      	<div class="item slack">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/slack.png" class="img-fluid"> <b>slack</b>
											</a>
										</div>
								
										<div class="item">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/adobe.png" class="img-fluid">
											</a>
										</div>
						      </div>
						    </div>

						    <div class="carousel-item">
						      <div class="row d-flex justify-content-around px-4">
						      	<div class="item google">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/google.png" class="img-fluid">
											</a>
										</div>
						
										<div class="item">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/facebook.png" class="img-fluid">
											</a>
										</div>
						      </div>
						    </div>

						    <div class="carousel-item">
						      <div class="row d-flex justify-content-around px-4">
						      	<div class="item">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/spotify.png" class="img-fluid">
											</a>
										</div>

										<div class="item">
											<a href="javascript:;">
												<img alt="some image" src="/assets/img/nike.png" class="img-fluid">
											</a>
										</div>
						      </div>
						    </div>
			
						  </div>
						  <a class="carousel-control-prev" href="#logo-carousel" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#logo-carousel" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>	
			</div>

			<!-- ================================= COMMENTS =================================== -->

			<div class="container-fluid">
				<div class="comments" id="comments">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center comments-title">
								<img alt="some image" src="/assets/img/waves.png">
								<p>Our clients say</p>	
							</div>
						</div>

						<div class="row">
							<div class="col-12">
								<div id="comments-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
									<div class="col text-center">
										<ol class="carousel-indicators">
											<li data-target="#comments-carousel" data-slide-to="0" class="active"></li>
											<li data-target="#comments-carousel" data-slide-to="1"></li>
										</ol>
									</div>

									<div class="carousel-inner">
										<div class="d-md-block d-sm-none" ng-show="screen">
											<div class="carousel-item" ng-repeat="item in [1,2]" ng-class="{'active': $index == 0 && screen}">
												<div class="row">
													<div class="col-6" ng-repeat="person in allData.comment">
														<div class="row mb-3">
															<div class="col">
																<img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
															</div>
														</div>

														<div class="row mb-5">
															<div class="col">
																<span class="comment-desc">
																	@{{ person.text }}
																</span>
															</div>
														</div>

														<div class="row">
															<div class="col">
																<img alt="some image" ng-src="@{{ '/assets/img/' + person.img }}" class="img-fluid">
																<span class="username ml-3"><b>@{{ person.name }}</b> @{{ person.work }}</span>
															</div>
														</div>	
													</div>
												</div>
											</div>
										</div>

										<div class="d-sm-block" ng-show=" ! screen">
											<div class="carousel-item" ng-repeat="person in allData.comment" ng-class="{'active': $index == 0 && ! screen}">
												<div class="row">
													<div class="col-12" >
														<div class="row mb-3">
															<div class="col">
																<img alt="some image" src="/assets/img/quote.png" class="img-fluid quote">
															</div>
														</div>

														<div class="row mb-5">
															<div class="col">
																<span class="comment-desc">
																	@{{ person.text }}
																</span>
															</div>
														</div>

														<div class="row">
															<div class="col">
																<img alt="some image" ng-src="@{{ '/assets/img/' + person.img }}" class="img-fluid">
																<span class="username ml-3"><b>@{{ person.name }}</b> @{{ person.work }}</span>
															</div>
														</div>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- ================================= CONTACTS =================================== -->

						<div class="row justify-content-center contacts" id="contacts">
							<div class="col-12 col-md-5 text-center">
								<form class="contacts-form h-100 w-100 pt-5" method="post" name="contactForm" novalidate="novalidate">
									<div class="d-flex justify-content-center">
										<span class="contact-form-title">Contacts</span>
									</div>

									<div class="d-flex justify-content-center mb-5">
										Sign up for our newsletter to receive updates
									</div>
									<div class="form-row mb-3">
										<div class="col px-4">
											<input type="text" name="name" class="form-control py-3" placeholder="Name" required="required"
											ng-pattern="namePattern" ng-model="contact.name" id="contact-name">
										</div>
									</div>

									<div class="form-row mb-3">
										<div class="col px-4">
											<input type="text" name="phone" class="form-control py-3" placeholder="Phone" required="required"
											ng-pattern="phonePattern" ng-model="contact.phone" id="contact-phone">
										</div>
									</div>

									<div class="form-row mb-3">
										<div class="col px-4">
											<input type="email" name="email" class="form-control py-3" placeholder="Email" required="required"
											ng-pattern="emailPattern" ng-model="contact.email" id="contact-email">
										</div>
									</div>

									<div class="form-row">
										<div class="col px-4">
											<button class="btn btn-info w-100 py-4 send-button" ng-click="saveContact()">SEND</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ================================= FOOTER =================================== -->

			<div class="container-fluid">
				<div class="footer">
					<div class="container">
						<div class="d-flex justify-content-between align-items-center">
							<div>All right reserved 2015</div>
							<div class="d-flex justify-content-between mr-4">
								<a href="javascript:;" ng-repeat="image in allData.social" class="mx-1"><img alt="some image" ng-src="@{{ '/assets/img/' + image.img }}" 
									class="img-fluid"></a>
							</div>
							<div><b>1 234 243 123</b></div>
						</div>
					</div>
				</div>
			</div>

		<div class="modal fade bd-example-modal-lg" id="gallery-modal" tabindex="-1" role="dialog" aria-labelledby="gallery-modal" aria-hidden="true">
			<div class="modal-dialog modal-lg h-100">
				<div class="modal-content">
					<div class="modal-image-holder d-flex justify-content-center w-100">
						<img src="" class="enlargeImageModalSource">
					</div>
				</div>

				<div class="modal-content w-100 modal-navigation">
					<div class="d-flex align-items-center justify-content-around w-100">
						<button class="btn btn-default" id="modal-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></button>
						<button class="btn btn-default" id="modal-next"> <i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>

		<!-- ================================= MODAL SIGN IN =================================== -->

		<div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title ml-auto" id="exampleModalLabel" ng-show="isLogIn">Authorization</h5>
		        <h5 class="modal-title ml-auto" id="exampleModalLabel" ng-show="! isLogIn">Registration</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		      <form method="POST" action="{{ route('register') }}" class="register" ng-show="! isLogIn">
		      	{{ csrf_field() }}
			      <div class="modal-body">
			        <div class="sign-in-form h-100 w-100 py-3">

							<div class="form-row mb-3">
								<div class="col px-4">
									<input type="email" id="register-input-name" class="form-control py-3" placeholder="Email" name="email" ng-model="login.email">
								</div>
							</div>

							<div class="form-row mb-3">
								<div class="col px-4">
									<input type="password" id="register-input-email" class="form-control py-3" placeholder="Password" name="password" ng-model="login.password">
								</div>
							</div>
						</div>
			      </div>

			      <div class="modal-footer">
			      	
			      	<a href="#" class="mr-auto ml-3" ng-click="isLogIn = ! isLogIn">Authorization</a>
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        <button type="submit" class="btn btn-primary">Sign Up</button>
			        
			      </div>
		      </form>

		      <form method="POST" action="{{ route('login') }}" class="login" ng-show="isLogIn">
		      	{{ csrf_field() }}
			      <div class="modal-body">
			        <div class="sign-in-form h-100 w-100 py-3">

								<div class="form-row mb-3">
									<div class="col px-4">
										<input type="email" id="sign-in-input-name" class="form-control py-3" placeholder="Email" name="email" ng-model="login.email">
									</div>
								</div>

								<div class="form-row mb-3">
									<div class="col px-4">
										<input type="password" id="sign-in-input-email" class="form-control py-3" placeholder="Password" name="password" ng-model="login.password">
									</div>
								</div>
							</div>
			      </div>

			      <div class="modal-footer">
			      	
			      	<a href="#" class="mr-auto ml-3" ng-click="isLogIn = ! isLogIn">Registration</a>
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			        <button type="submit" class="btn btn-primary">Login</button>
			        
			      </div>
		      </form>
		    </div>
		  </div>
		</div>