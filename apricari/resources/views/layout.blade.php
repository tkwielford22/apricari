<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<style type="text/css">
		.list_item{
			display:inline; 
			width: .33%;
		}


	</style>
	@yield('header')

</head>
<body>
	<div class="container">
		<div class="wrapper">
			<nav class="navbar navbar-default navbar-fixed-top" style="">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <!-- <a href="#">Apricari</a> -->
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    <div class="col-sm-12">
				    	<div class="col-sm-5">
				    		<h4 style="text-align: center;"><a href="#">Products</a></h4>
				    	</div>
				    	<div class="col-sm-2"><h1 style="text-align: center;"><a href="./">APRICARI</a></h1></div>
				    	<div class="col-sm-5">
				    		<h4 style="text-align: center;"><a href="./about">About Us</a></h4>
				    	</div>
				    </div>
			  </div><!-- /.container-fluid -->
			</nav>
			@yield('content')
		</div>
	</div>
	



	@yield('footer')
	<script src="../vendor/auto-hide/dist/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".navbar-fixed-top").autoHidingNavbar();
			$("body").click(function(){
				alert($(window).scrollTop());
			});
		});
		// $(window).bind('scroll', function () {
		//     if ($(window).scrollTop() > 50) {
		//     	//$('.navbar').css("display","inline");
		//         // $('.navbar').addClass('fixed');
		//         $('.navbar').addClass('navbar-fixed-top');
		//     } else {
		//         // $('.navbar').removeClass('fixed');
		//     }
		// });
		
	</script>
</body>

</html>