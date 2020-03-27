<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">

   @include('layouts.header')
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">

  
   @include('layouts.navbar')


	@yield('content') 


   @include('layouts.footer')
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	</body>
</html>

