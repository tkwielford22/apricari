@extends('layout')


@section('content')

    <h1>The PROD Page</h1>
	<ul>
		@foreach($users as $user)
		<li> {{ $user->login }} </li>
		@endforeach
	</ul>  

@stop

@section('footer')
    <script type="text/javascript">

    </script>

@stop