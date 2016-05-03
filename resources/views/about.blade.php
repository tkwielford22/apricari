@extends('layout')
<style type="text/css">
	.jumbotron{
		background: url('../resources/assets/images/beach.jpg');

		margin-top: 60px;
	}
	.menu{
		position: fixed;
		top: 0 !important;
		background: rgba(255,255,255,0.5);
	}
</style>

@section('content')

    <div class="container" >
    	<div class="wrapper">
    		<div class="jumbotron">
			    <h1>About Me</h1>      
			  </div>
    		<div class="story col-md-5">
    			<h1>My Story</h1>
    			<h4>Owner, Apricari</h4>
    			<p>My Name is Dian Kaye Ottinger. I’m a follower of Christ, single mother of 4, 
    			and a resident of San Antonio, Texas. I grew up watching my grandmother 
    			and mother sew on the old pedal Singer sewing machine. The idea of taking 
    			thread and material and creating a brand new piece that has never been seen 
    			inspired me to follow in their footsteps. I have made so many products, but I 
    			am beyond proud of the Apricari towel I designed and created all on my own. 
    			I love making people smile and my hope is that this product can help you take 
    			a break in your busy schedule to relax and enjoy some time to yourself.</p>
    		</div>
    	</div>
    </div>

@stop

@section('footer')
    <script type="text/javascript">

    </script>

@stop