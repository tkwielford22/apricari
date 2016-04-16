@extends('layout')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<style type="text/css">
	body{
			background-image: url('../resources/assets/images/beach.jpg');
			background-size: 100vw 100vh;
			background-repeat: no-repeat;
	}
		#main{
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

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@section('content')
	<section>
		<div class="container">
			<div id="main">
				<div class="wrapper">
					<div class="row">
						<div class="col-sm-12">
							<h1 style="text-align: center; margin-top: 125px;"><img src="../resources/assets/images/apricari.png"></h1>
							<div class="col-sm-6">
								<img src="../resources/assets/images/sunglasses.png">
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
				</div>
			</div>
			<!-- <div id="footer">
				Travis Kwielford
			</div> -->
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
