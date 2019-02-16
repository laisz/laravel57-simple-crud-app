<!Doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		{{-- The Above 3 Meta Tag Must Come First --}}
		
		<title> @yield( "title" ) </title>

		{{-- FontAwesome File --}}
		<link rel="stylesheet" href="{{ route( 'home' ) }}/css/font-awesome.min.css" type="text/css">
		{{-- Bootstrap File --}}
		{{-- This Bootsrtap File Must be before of Above Main CSS file --}}
		<link rel="stylesheet" href="{{ route( 'home' ) }}/css/bootstrap.min.css" type="text/css">

		{{-- Main CSS file will go here --}}
		<link rel="stylesheet" href="{{ route( 'home' ) }}/css/rawcss.css" type="text/css">

		{{-- Material BootStrap CSS File --}}
		<link rel="stylesheet" href="{{ route( 'home' ) }}/boot-material-design/roboto.min.css">
		<link rel="stylesheet" href="{{ route( 'home' ) }}/boot-material-design/material-fullpalette.min.css">
		<link rel="stylesheet" href="{{ route( 'home' ) }}/boot-material-design/ripples.min.css">

		
		

	</head>
	<body>
		
		<!-- Header Area Start -->
		<header class="header">
			@include( 'layouts.navbar' )
		</header> <!-- /.header -->
		<!-- Header Area End -->


		{{-- Something Will Goes Here --}}

		@yield( 'content' );

		


		<!-- Footer Area Start -->
		<footer class="footer">
			<div class="container">
				
				<div class="go-top">
					<i class="fa fa-arrow-up"></i>
				</div> <!-- /.go-top -->
			</div> <!--/ .container -->
		</footer> <!--/ .footer -->
		<!-- Footer Area End -->
		
		{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
		<script src="{{ route( 'home' ) }}/js/jquery1.12.4.min.js" type="text/javascript"></script>
		{{-- Include all compiled plugins (below), or include individual files as needed --}}
		<script src="{{ route( 'home' ) }}/js/bootstrap.min.js" type="text/javascript"></script>

		{{-- Material BootStrap JS File --}}
		<script src="{{ route( 'home' ) }}/boot-material-design/material.min.js"></script>
		<script src="{{ route( 'home' ) }}/boot-material-design/ripples.min.js"></script>
		<script type="text/javascript"> $.material.init() </script>

		@stack( 'minjs' )

		<script type="text/javascript">			

			$( document ).ready( function() {
				
				$( window ).scroll( function() {
					
					if( $( this ).scrollTop() > 500 ){
						$( ".go-top" ).fadeIn( 2000 );
					}else{
						$( ".go-top" ).fadeOut( 2000 );
					}
					
				} );


				$( ".go-top" ).click( function() {
					

					$( "html, body" ).animate( {
						//scrollTop : "+=300"
						scrollTop : 0
					}, 2000 );

				} );

			} );
			
			$( function() {
				
				$( "[data-toggle='tooltip']" ).tooltip();
				$( "[data-toggle='popover']" ).popover();
				
			} );

		</script>

	</body>
</html>