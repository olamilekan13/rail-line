@include('asset.header')


			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url( {{ ('assets/folder/images/cover_bg_5.jpg') }});">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-md-5">
									<div class="tabulation animate-box">
	
									  <!-- Nav tabs -->
									   <ul class="nav nav-tabs" role="tablist">
										  <li role="presentation" class="active">
											  <a href="#Tickets" aria-controls="Tickets" role="tab" data-toggle="tab">Tickets</a>
										  </li>
										  <li role="presentation">
											   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Route</a>
										  </li>
										  <li role="presentation">
											   <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
										  </li>
									   </ul>
	
									   <!-- Tab panes -->
										<div class="tab-content">
										 <div role="tabpanel" class="tab-pane active" id="flights">
											<div class="row">
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">From:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>Agbado Station</option>
															<option value="economy">Iju Station</option>
															<option value="business">Agege Station</option>
															<option value="">Ikeja Station -Hub Station</option>
															<option value="economy">Oshodi Station</option>
															<option value="first">Mushin Station</option>
															<option value="business">Yaba Station</option>
															<option value="business">Oyingbo Station</option>
														</select>
													</section>
													<!-- <div class="input-field">
														<label for="from">From:</label>
														<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA"/>
													</div> -->
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">To:</label>
														<select class="cs-select cs-skin-border">
															<option value="" >Agbado Station</option>
															<option value="economy">Iju Station</option>
															<option value="business">Agege Station</option>
															<option value="" disabled selected>Ikeja Station -Hub Station</option>
															<option value="economy">Oshodi Station</option>
															<option value="first">Mushin Station</option>
															<option value="business">Yaba Station</option>
															<option value="business">Oyingbo Station</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Check In:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Check Out:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="class">Class:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>Economy</option>
															<option value="economy">Economy</option>
															<option value="first">First</option>
															<option value="business">Business</option>
														</select>
													</section>
												</div>
												<!-- <div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Children:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div> -->
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Book Ticket">
												</div>
											</div>
										 </div>
	
										 <div role="tabpanel" class="tab-pane" id="hotels">
											 <div class="row">
												<div class="col-xxs-12 col-xs-12 mt">
													<section>
														<label for="class">From Route:</label>
														<select class="cs-select cs-skin-border">
															<option value="1" disabled selected>BLUELINE</option>
															<option value="2">REDLINE</option>
															
														</select>
													</section>
												</div>
												<!-- <div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Return:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div> -->
												<!-- <div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Check Out:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div> -->
												<!-- <div class="col-sm-12 mt">
													<section>
														<label for="class">Rooms:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="economy">1</option>
															<option value="first">2</option>
															<option value="business">3</option>
														</select>
													</section>
												</div> -->
												<!-- <div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div> -->

												<div class="col-xxs-12 col-xs-12 mt">
													<section>
														<label for="class">To Route:</label>
														<select class="cs-select cs-skin-border">
															<option value="1" disabled selected>BLUELINE</option>
															<option value="2">REDLINE</option>
														</select>
													</section>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Route">
												</div>
											</div>
										 </div>
	
										 <div role="tabpanel" class="tab-pane" id="packages">
											 <div class="row">
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">From:</label>
														<select class="cs-select cs-skin-border">
															@foreach ($station as $stations )
															<option value=""disabled selected >{{ $stations->from }}</option>

																
															@endforeach
															{{-- <option value=""disabled selected >Agbado Station</option>
															<option value="economy">Iju Station</option>
															<option value="first">First</option>
															<option value="business">Agege Station</option>
															<option value="" >Ikeja Station -Hub Station</option>
															<option value="economy">Oshodi Station</option>
															<option value="first">Mushin Station</option>
															<option value="business">Yaba Station</option>
															<option value="business">Oyingbo Station</option> --}}
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">To:</label>
														<select class="cs-select cs-skin-border">
															@foreach ($station as $stations )
															<option value=""disabled selected >{{ $stations->from }}</option>

																
															@endforeach
															{{-- <option value="" >Agbado Station</option>
															<option value="economy">Iju Station</option>
															<option value="first">First</option>
															<option value="business">Agege Station</option>
															<option value="" disabled selected>Ikeja Station -Hub Station</option>
															<option value="economy">Oshodi Station</option>
															<option value="first">Mushin Station</option>
															<option value="business">Yaba Station</option>
															<option value="business">Oyingbo Station</option> --}}
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-start">Departs:</label>
														<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-xxs-12 col-xs-6 mt alternate">
													<div class="input-field">
														<label for="date-end">Return:</label>
														<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
													</div>
												</div>
												<div class="col-sm-12 mt">
													<section>
														<label for="class">Rooms:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="economy">1</option>
															<option value="first">2</option>
															<option value="business">3</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Adult:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xxs-12 col-xs-6 mt">
													<section>
														<label for="class">Children:</label>
														<select class="cs-select cs-skin-border">
															<option value="" disabled selected>1</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</section>
												</div>
												<div class="col-xs-12">
													<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
												</div>
											</div>
										 </div>
										</div>
	
									</div>
								</div>
								<div class="desc2 animate-box">
									<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
										<h2>Lagos Metro Red Line</h2>
										<h3>The Lagos Metro Red Line is one of the most important pieces of transport infrastructure in the city. It is responsible for connecting some of Lagos’s most popular areas and destinations.</h3>
										<!-- <span class="price">$599</span> -->
										<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
			</div>
	












	</div>
	</div>	
      
    
    <div class="main-container">


		<div class="content-container">
			<h1 class="hidden">Homepage</h1>
			<div class="homepage container-fluid">
				
					
					<!--ssi:trip_planner_search_bar-->
               
				
                <!--end of ssi:trip_planner_search_bar-->
					<div class="container">
						<div class="inner-content-container row">
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/1B.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-promotion"></span><a href="" class="h3 title" title="Latest News">Latest News</a></li>
									</ul>
								</div>
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/TIM.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-ticket"></span><a href="{{ url('buy-ticket') }}" class="h3 title" title="Ticketing Information">Ticketing Information</a></li>
											{{-- <li>
												<a href="" class="list-item">
													<span class="list-title">Timetable</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li> --}}
											<li>
												<a href="{{ url('fare') }}" class="list-item">
													<span class="list-title">Fares</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="{{ url('buy-ticket') }}" class="list-item">
													<span class="list-title">Ticket purchase</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
									</ul>
								</div>
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/1D.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-travel-guide"></span><a href="#" class="h3 title" title="Trip Information">Trip Information</a></li>
											<li>
												<a href="{{ url('alteration') }}" class="list-item">
													<span class="list-title">Process</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Exit Information</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="{{ url('destination') }}" class="list-item">
													<span class="list-title">Lagos Metro  Station Connections</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
									</ul>
								</div>
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/1E_revised.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-facilities"></span><a href="#" class="h3 title" title="Services and Facilities">Services and Facilities</a></li>
											<li>
												<a href="{{ url('ticket type') }}" class="list-item">
													<span class="list-title">Station Facilities</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Train Facilities</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<!-- <li>
												<a href="/en/services-facilities/apps.html" class="list-item">
													<span class="list-title">Apps Corner</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li> -->
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Station Shopping and Services</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
									</ul>
								</div>
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/1F_revised.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-travel"></span><a href="{{ url('contact-us') }}" class="h3 title" title="About High Speed Rail">About High Speed Rail</a></li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">High Speed Rail</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Lagos State Metro Station</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Attractions</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
									</ul>
								</div>
								<div class="index-content-item col-md-4 col-xs-12">
									<span class="image-container clearfix"><img src="../../assets/img/homepage/1G.jpg" alt="..."></span>
									<ul class="custom-list-style">
										<li class="section-title"><span class="section-icon icon ico-shop"></span><a href="#" class="h3 title" title="High Speed Rail Shopping">High Speed Rail Shopping</a></li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Station Shopping and Services</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">Leasing Enquiry</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
											<li>
												<a href="#" class="list-item">
													<span class="list-title">High Speed Rail Souvenirs</span>
													<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>
												</a>
											</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
		<!-- <script>
			$(document).ready(function(){
				$.ajax({
					method: 'GET',
					// url: home_promotion_api
				}).then(function(data){
					if(data.section == 'highlighted_promotion'){
						var homePromotionData
						homePromotionData = data.data
						InitPromotionItem(homePromotionData, initCarousel)
					}
				})
				$.ajax({
					method: 'GET',
					url: promotion_api
				}).then(function(data){
					if(data.section == 'promotion'){
						var promotionData = data.data
						initIndexItem(promotionData)
					}
				})
			})
			function InitPromotionItem(data, callback){
				var carouselItemHtml = '',
					prevButton = data.length > 1 ? '<button class="slide-button prev icon-l icon-button ico-arrow-left-orange"></button>' : '',
					nextButton = data.length > 1 ? '<button class="slide-button next icon-l icon-button ico-arrow-right-orange"></button>' : '',
					lang = languagePreference()
				data.map(function(item, id){
					//carousel
					var redirectLink,
						carouselLink
					if(item['link_' + lang]){
						redirectLink = item['link_' + lang]
						carouselLink = '<p><a class="button button-default" href="' + redirectLink + '" role="button" ' + (item.is_open_new_tab ? 'target="_blank"' : '') + '><span class="content-wrapper">More</span></a></p>'
					} else {
						redirectLink = '#' + item.id
						carouselLink = '<p><a class="button button-default" href="' + redirectLink + '" role="button" ' + (item.is_open_new_tab ? 'target="_blank"' : '') + '><span class="content-wrapper">More</span></a></p>'
					}
					carouselHtml = '<div class="carousel-content swiper-slide">' + 
								'<span class="image-container">' + 
								'<img class="carousel-content-img" src="' + item['image_' + lang ] + '" alt="carousel slide">' + 
								'<img class="carousel-content-img-mobile" src="' + item['mobile_image_' + lang ] + '" alt="carousel slide">' + 
								'</span>' +
								'<div class="jumbotron">' +
									'<h2 class="h1">' + item['title_'+ lang] + '</h2>' +
									'<p>' + item['description_' + lang] + '</p>' +
									carouselLink +
								'</div>' +
							'</div>'
					carouselItemHtml = carouselItemHtml + carouselHtml
				})
				$('.carousel').append(prevButton + '<div class="swiper-wrapper">' + carouselItemHtml + '</div>' + nextButton)
				callback()
			}
			function initCarousel (){
				var swiper = new Swiper('.carousel', {
					slidesPerView: 'auto',
					loop: true,
					autoHeight: false,
					autoResize: true,
					navigation: {
						nextEl: '.next',
						prevEl: '.prev'
					},
				})
			}
			//index item
			function initIndexItem(data){
				data.map(function(item, id){
					var redirectLink = item['link_' + lang] ? item['link_' + lang] : '/en/latest-news/detail.html?id=' + item.id
					if(id < 3) {
						var indexItemHtml = '<li>' +
												'<a href="' + redirectLink + '"' + (item.is_open_new_tab ? 'target="_blank"' : '') + ' class="list-item">' +
													'<span class="list-title">' + item['title_' + lang] + '</span>' +
													'<span class="arrow-button"><span class="icon-s ico-arrow-right-white"></span></span>'+
												'</a>'
											'</li>'
						$($('.inner-content-container .index-content-item')[0]).find('.custom-list-style').append(indexItemHtml)
					}
				})
			}
		</script> -->

		@include('asset.footer')