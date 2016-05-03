@extends('layout')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style type="text/css">
		@media (min-width: 1200px) {
		    .container{
		        max-width: 900px;
		    }
		}
		#main{
			width: 100%;
			background-color: #FFFFFF;
			position: relative;
			/*box-shadow: 10px 10px 5px 5px #888888;*/
		}
		#footer{
			height: 100vh;
			width: 100%;
		}
		#products{
			background: rgba(255,255,255,0.5);
			text-align: center;
			padding-top: 40px;
			width: 100%;
			background-color: #FFFFFF;
		}
		#products p{
			color: #2385CD;
			font-size: 400%;
		}
		.product_box{
			height: 200px;
			width: 200px;
			background: green;
			border: 1px solid black;
			text-align: center;
		}
		#down_arrow{
			position: absolute;
			top: 85%;
			font-size: 400%;
			left: 50%;
		}
		#down_arrow:hover{
			color: #625F60;
		}
		.section-name{
		    text-align: center;
		    font-size: 200%;
		    margin: 0;
		    margin-top: 20%;
		    color: black;
		}
		.section-name span{
			font-weight: bold;
    		text-transform: uppercase;
		}
		.contact_section{
			padding-top: 50px;
			text-align: center;
		}
		.contact_info{
			color: #7EFF09;
		}
		.contact_info span{
		    color: #FDCD05;
		}
		.store-item-image{
			max-height: 365px;
		}
		#menu_links{
			list-style: none;
		}
		#menu_links li{
			display: inline;
		}
		.menu-button{
			height: 70;
		}

		.video_row{
			text-align: center;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@section('content')
	<section>
		<div class="container">
				<div class="wrapper">
					<div id="main">
						<div class="row">
							<div class="btn-group btn-group-justified" role="group" aria-label="...">
							  <div class="btn-group col-sm-3" role="group">
							    <button type="button" class="btn menu-button" style="background: url(../resources/assets/images/menu-item.png); 
			background-size: 100% 100%; color: white;">Apricari Towel</button>
							  </div>
							  <div class="btn-group col-sm-3" role="group">
							    <button type="button" class="btn menu-button" style="background: url(../resources/assets/images/menu-item.png); 
			background-size: 100% 100%; color: white; ">Products</button>
							  </div>
							  <div class="btn-group col-sm-3" role="group">
							    <button type="button" class="btn menu-button" style="background: url(../resources/assets/images/menu-item.png); 
			background-size: 100% 100%; color: white;">About Me</button>
							  </div>
							  <div class="btn-group col-sm-3" role="group">
							    <button type="button" class="btn menu-button" style="background: url(../resources/assets/images/menu-item.png); 
			background-size: 100% 100%; color: white;">Contact Me</button>
							  </div>
							</div>
						</div>
						<div class="row" class="video_row">
							<div class="col-sm-12" style="position:relative">
								<div class="col-sm-12" style="text-align: center; margin-top: 35px;">
									<iframe width="746.66" height="472.5"
									 	src="https://www.youtube.com/embed/Iwqw3c42Nsg?autoplay=1" frameborder="0" allowfullscreen>
									</iframe>
								</div>	
							</div>







							<!-- <div class="col-sm-12" style="position:relative">
								<h1 style="text-align: center; margin-top: 125px;"><img src="../resources/assets/images/apricari.png"></h1>
								<div c lass="col-sm-12" style="text-align: center; margin-top: 35px;">
									<!-- <iframe width="746.66" height="472.5"
									 	src="https://www.youtube.com/embed/Iwqw3c42Nsg?autoplay=1" frameborder="0" allowfullscreen>
									</iframe> -->
									



									<!-- <div class="col-sm-4">
										<img style="max-height: 600px"src="../resources/assets/images/display2.png">
									</div>
									<div class="col-sm-5" style="position:absolute; left: 30%;">
										<h3>Apricari Lounge Covers</h3>
										<p>A cover with a pocket for everything! Safely store all of your things in this amazing Lounge Cover that roles up into a stylish bag!</p>
										<!-- <img src="../resources/assets/images/rolled_yellow.png"> -->
									<!-- </div> -->
									<!-- <div class="section-name"><br>
										<p>
											We are currently in the process of <span>updating</span> our website.
										</p><br>
										<p>
											Please be paitent while we make our changes.
										</p>
									</div> -->
								<!-- </div> -->
						
						</dev>
					</div>
				

				<!-- <h4 id="down_arrow" onClick="scrollDown();"><i class="fa fa-angle-double-down" aria-hidden="true"></i></h4> -->
				<!-- <h4 style="text-align: center; margin-top: 300px;">We are curently UNDER CONSTRUCTION. Our website will be back soon.</h4>
				<h4 style="text-align: center;">DEKInnovation@yahoo.com</h4> -->
			</div>
			<div id="products">
				
				<p>Apricari Lounge Covers</p>
				<hr>
				<div class="gallery com-sm-12">
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/sunglasses.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail">Teal Sunglasses</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>							            
						        </div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/blue_floral.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">Product Two!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/green_thick_stripe.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">LZ03 Mint Green Stripe</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/purple_pink_green_dots.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">L01 Orange Polka Dot</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/blue_green_dots.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">L02 Blue Polka Dot</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/multi_color.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">L03 Pink Multi Stripe</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/blue_white_chevron1.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">B03 Pink</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/pink_thick_stripe.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">Product Eight!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="">
						            <img class="store-item-image" src="../resources/assets/images/pink_stripe1.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="/products/detail/1">LZ Pink Stripe</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <!-- <div class="oui-form-justified">
						            <a href="#" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form >
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div> -->
						    </div>
						</div>
					</div>
				</div>
							
			</div>
			<div id="footer">
				<div class="wrapper">
					<div>
						<div class="contact_section col-sm-12" style="margin-top: 230px;">
							<p>All Purchase orders</p>
							<h3 class="contact_info">DEKInnovation<span>@yahoo.com</span></h3>

						</div>
					</div>
				</div>
			</div>
			<!-- <nav class="navbar navbar-inverse navbar-fixed-bottom">
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a target="new" href="https://www.facebook.com/apricari/"><i class="fa fa-facebook"></i></a></li>
						<li><a target="new" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li><a target="new" href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<span id="currenttime" style="float:right;"></span>
				</div>
			</nav> -->
		</div>
	</section>
    

@stop

@section('footer')
    <script type="text/javascript">
    $( document ).ready(function() {
	    
	    
	});
	function scrollDown(){
		$('html, body').animate({
		    scrollTop: $("#products").offset().top
		}, 1000);
	}	
    </script>

@stop
