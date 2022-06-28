@extends    ("layouts.html")

@section("title","Home Page | Html theme Conversion")

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

<section id="about">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>About Us</h2>
					<hr>					
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div>
	
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
					<img src="images/1.png" class="img-responsive" />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem minus sint, commodi.</p>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Web Design
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch 3 wolf moon tempor.<br>
								
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								non cupidatat skateboard dolor brunch.</p>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
								   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->
   

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

@section("contact")

<section id="contact">
		<div class="contact-page">
			<div class="container">
				<div class="center">        
					<h2>Sign up to be notified</h2>						
				</div> 
				
				<div class="row contact-wrap">						
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="wow fadeInDown">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Name *</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="number" class="form-control">
								</div>
								<div class="form-group">
									<label>Company Name</label>
									<input type="text" class="form-control">
								</div>                        
							</div>
						</div>
						<div class="wow fadeInRight">
							<div class="col-sm-5">
								<div class="form-group">
									<label>Subject *</label>
									<input type="text" name="subject" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Message *</label>
									<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
								</div>                        
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
								</div>
							</div>
						</div>
					</form> 
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/#contact-page-->		
	</section>

@endsection

