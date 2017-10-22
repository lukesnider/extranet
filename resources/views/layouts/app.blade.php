<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  
    <!-- Styles --> 
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.0/css/dataTables.responsive.css" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!--<link rel="stylesheet" href="/css/sidebar.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/sidebar_new.css">
</head>
<body>


	<div class="nav-side-menu">
		<div class="brand">                    
            {{ config('app.name', 'Laravel') }}
        </div>
		<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	  
			<div class="menu-list">
	  
				<ul id="menu-content" class="menu-content collapse out">
					<li class=" @if(Route::currentRouteName() == 'dash') active @endif ">
					  <a href="{{ route('dash') }}">
					  <i class="fa fa-dashboard fa-lg"></i> Dashboard
					  </a>
					</li>
					<li  data-toggle="collapse" data-target="#projects" class="collapsed  @if(Route::currentRouteName() == 'projects.index') active @endif">
					  <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Projects <span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="projects">
						<li><a href="{{ route('projects.index') }}">All Projects</a></li>
						<li><a href="{{ route('projects.create') }}">New Project</a></li>
					</ul>	
					<li  data-toggle="collapse" data-target="#clients" class="collapsed  @if(Route::currentRouteName() == 'clients.index') active @endif">
					  <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Clients <span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="clients">
						<li><a href="{{ route('clients.index') }}">All Clients</a></li>
						<li><a href="{{ route('clients.create') }}">New Client</a></li>
					</ul>
					<li  data-toggle="collapse" data-target="#users" class="collapsed  @if(Route::currentRouteName() == 'users.index') active @endif">
					  <a href="#"><i class="fa fa-users" aria-hidden="true"></i> User Management <span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="users">
						<li><a href="{{ route('users.index') }}">All Users</a></li>
						<li><a href="{{ route('users.create') }}">New User</a></li>
					</ul>
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
                        @endguest
					<!--
					<li  data-toggle="collapse" data-target="#products" class="collapsed active">
					  <a href="#"><i class="fa fa-gift fa-lg"></i> UI Elements <span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="products">
						<li class="active"><a href="#">CSS3 Animation</a></li>
						<li><a href="#">General</a></li>
						<li><a href="#">Buttons</a></li>
						<li><a href="#">Tabs & Accordions</a></li>
						<li><a href="#">Typography</a></li>
						<li><a href="#">FontAwesome</a></li>
						<li><a href="#">Slider</a></li>
						<li><a href="#">Panels</a></li>
						<li><a href="#">Widgets</a></li>
						<li><a href="#">Bootstrap Model</a></li>
					</ul>
					<li data-toggle="collapse" data-target="#service" class="collapsed">
					  <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
					</li>  
					<ul class="sub-menu collapse" id="service">
					  <li>New Service 1</li>
					  <li>New Service 2</li>
					  <li>New Service 3</li>
					</ul>


					<li data-toggle="collapse" data-target="#new" class="collapsed">
					  <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
					</li>
					<ul class="sub-menu collapse" id="new">
					  <li>New New 1</li>
					  <li>New New 2</li>
					  <li>New New 3</li>
					</ul>
				-->
				</ul>
		 </div>
	</div>
	
	
	<div class="app_body">
		@yield('content')
	</div>

    <!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
	@stack('scripts')
	</body>
</html>
