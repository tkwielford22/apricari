@extends('layout')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style type="text/css">
	body{
			background-image: url('../resources/assets/images/beach.jpg');
			background-size: 100vw 100vh;
			background-repeat: no-repeat;

		    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		    font-size: 14px;
		    line-height: 1.42857143;
		    color: #333;
		    background-color: #fff;
	}
		#main{
			height: 100vh;
			width: 100%;
		}
		#footer{
			height: 100vh;
			width: 100%;
		}
		#products{
			height: 100vh;
			text-align: center;
			padding-top: 40px;
			width: 100%;
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

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@section('content')
	<section>
		<div class="container">
			<div id="main">
				<div class="wrapper">
					<div class="row">
						<div class="col-sm-12" style="position:relative">
							<h1 style="text-align: center; margin-top: 125px;"><img src="../resources/assets/images/apricari.png"></h1>
							<div class="col-sm-12">
								<!-- <div class="col-sm-4">
									<img style="max-height: 600px"src="../resources/assets/images/display2.png">
								</div>
								<div class="col-sm-5" style="position:absolute; left: 30%;">
									<h3>Apricari Lounge Covers</h3>
									<p>A cover with a pocket for everything! Safely store all of your things in this amazing Lounge Cover that roles up into a stylish bag!</p>
									<!-- <img src="../resources/assets/images/rolled_yellow.png"> -->
								</div>
								<div class="section-name"><br>
									<p>
										We are currently in the process of <span>updating</span> our website.
									</p><br>
									<p>
										Please be paitent while we make our changes.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<h4 id="down_arrow" onClick="scrollDown();"><i class="fa fa-angle-double-down" aria-hidden="true"></i></h4>
				<!-- <h4 style="text-align: center; margin-top: 300px;">We are curently UNDER CONSTRUCTION. Our website will be back soon.</h4>
				<h4 style="text-align: center;">DEKInnovation@yahoo.com</h4> -->
			</div>
			<div id="products">
				<h1>The Products</h1>
				<hr>
				<div class="gallery com-sm-12">
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/sunglasses.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product One!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/blue_floral.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Two!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/green_thick_stripe.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Three!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/purple_pink_green_dots.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Four!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/blue_green_dots.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Five!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/multi_color.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Six!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/pink_stripe.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Seven!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$38.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/blue_white_chevron.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Eight!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$48.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
						<div class="col-sm-4">
							<div class="store-item-inner">
						        <a class="store-item-image-anchor" href="/hemp-force-active/?pid=2318">
						            <img class="store-item-image" src="../resources/assets/images/pink_thick_stripe.png">
						        </a>
						        <div class="store-item-info">
						            <h3>              
						    			<a href="#">Product Nine!</a>
						            </h3>
								    
						            <div class="store-item-price"><span>$58.50</span></div>

						            
						        </div>
						        <div class="oui-form-justified">
						            <a href="/hemp-force-active/?pid=2318" class="oui-button oui-button-clear oui-button-passive">Learn More</a>
							        <form action="/cart/build_package.php?action=add_product&amp;" method="post">
							        	<input type="hidden" name="products_id" value="2318">
							        	<input type="hidden" name="cart_quantity" value="1">
							        	<a href="#" class="" onclick="$(this).parent('form').submit(); return false;">Add to Cart</a>
							        </form>            
						    	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="wrapper">
					<div>
						<div class="contact_section col-sm-12">
							<h3 class="contact_info">
								DEKInnovation<span>@yahoo.com</span>
							</h3>
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
