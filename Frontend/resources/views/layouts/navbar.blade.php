	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{ url('/') }}">Law<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>

							<li><a href="#">Practice Areas</a></li>
							<li><a href="#">Won Cases</a></li>
							<li class="has-dropdown">
								<a href="#">Blog</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							@if (Route::has('login'))
							@auth
							<li class="active"><a href="{{ url('/home') }}">Home</a></li>
							@else
							<li class="btn-cta"><a href="{{ route('login') }}"><span>Login</span></a></li>
							<li class="btn-cta"><a href="{{ route('register') }}"><span>Sign Up</span></a></li>
							@endauth
							@endif
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>