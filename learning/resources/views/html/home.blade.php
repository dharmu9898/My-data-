@extends("layouts.html")

@section("title","Home Page | Html Theme Conversion")

@section("home")
<div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/6.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="images/7.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/5.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>
@endsection

@section("about")
	@include("html.partials.about",["dates"=>$names])
@endsection

@section("portfolio")
<section id="portfolio">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>Portfolio</h2>
					<hr>					
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
	
        <div class="container">
			<div class="col-lg-12">		
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
				</ul><!--/#portfolio-filter-->

				<div class="row">
					<div class="portfolio-items">
						<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>
						</div><!--/.portfolio-item-->

						<div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

						<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>        
						</div><!--/.portfolio-item-->

						<div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>           
						</div><!--/.portfolio-item-->
			  
						<div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

						<div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>         
						</div><!--/.portfolio-item-->

						<div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

						<div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->
					</div>
				</div>
			</div>
		</div>
    </section><!--/#portfolio-item-->
	
@endsection

@section("features")
<section id="features">
		<div class="container">
			<div class="row">
				<div class="center">
					<div class="col-md-6 col-md-offset-3">
						<h2>Features</h2>
						<hr>					
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				
				<div class="col-md-4 wow fadeInLeft">
					<h3>Responsive</h3>
					<img src="images/portfolio/recent/item4.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInUp">
					<h3>Web Design</h3>
					<img src="images/portfolio/recent/item5.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Easy Customize</h3>
					<img src="images/portfolio/recent/item6.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
			</div>
		</div>		
	</section>
@endsection


