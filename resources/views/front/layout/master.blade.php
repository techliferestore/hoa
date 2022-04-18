<!doctype html>
<html lang="en">
<head>
    <title>House of Accounts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="default-style" content="text/html; charset=UTF-8"/>
    <meta name="HandheldFriendly" content="true"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="{{asset('/css/hc-offcanvas-nav.css')}}" rel="stylesheet"/>
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('/css/navigation.css')}}">
	@livewireStyles
	<link href="{{asset('/css/steper.css')}}" rel="stylesheet"/>
	<link href="{{asset('/css/prototype.css')}}" rel="stylesheet"/>
	<link href="{{asset('/css/style.css')}}" rel="stylesheet"/>
</head>
<body>


@yield('nav')

<!-- Header Start -->
<header class="p-0 mb-0 sticky-top bg_white">
		<a class="toggle" href="#">
			<span></span>
		  </a>
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
				<img src="{{asset('/images/hoa-logo.svg')}}" alt="House of Accounts"/>
			</a>
			<!-- breadcrumb start-->
			<div class="topnav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<ul class="breadcrumb" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Library</li>
				  </ul>
			</div>
			<!-- breadcrumb end-->
			<div class="profilebar">
				  <div class="profilebar_right">
					<div class="notifications">
					  <div class="icon_wrap"><img src="{{asset('/icons/bell.svg')}}"></div>
					  <div class="notification_dd">
						  <ul class="notification_ul">
							  <li class="starbucks success">
								  <div class="notify_data">
									  <div class="title">
										  Lorem, ipsum dolor.  
									  </div>
									  <div class="sub_title">
										Lorem ipsum dolor sit amet consectetur.
									</div>
								  </div>
								  <div class="notify_status">
									  <p>Success</p>  
								  </div>
							  </li>  
							  <li class="baskin_robbins failed">
								  <div class="notify_data">
									  <div class="title">
										  Lorem, ipsum dolor.  
									  </div>
									  <div class="sub_title">
										Lorem ipsum dolor sit amet consectetur.
									</div>
								  </div>
								  <div class="notify_status">
									  <p>Failed</p>  
								  </div>
							  </li> 
							  <li class="mcd success">
								  <div class="notify_data">
									  <div class="title">
										  Lorem, ipsum dolor.  
									  </div>
									  <div class="sub_title">
										Lorem ipsum dolor sit amet consectetur.
									</div>
								  </div>
								  <div class="notify_status">
									  <p>Success</p>  
								  </div>
							  </li>  
							  <li class="pizzahut failed">
								  <div class="notify_data">
									  <div class="title">
										  Lorem, ipsum dolor.  
									  </div>
									  <div class="sub_title">
										Lorem ipsum dolor sit amet consectetur.
									</div>
								  </div>
								  <div class="notify_status">
									  <p>Failed</p>  
								  </div>
							  </li> 
							  <li class="kfc success">
								  <div class="notify_data">
									  <div class="title">
										  Lorem, ipsum dolor.  
									  </div>
									  <div class="sub_title">
										Lorem ipsum dolor sit amet consectetur.
									</div>
								  </div>
								  <div class="notify_status">
									  <p>Success</p>  
								  </div>
							  </li> 
						  </ul>
					  </div>
					  
					</div>
					<div class="profile">
					  <div class="icon_wrap holder justify-content-center">
						<span>A</span>
					  </div>
			  
					  <div class="profile_dd">
						<ul class="profile_ul">
						  <li><a class="settings" href="#">Settings</a></li>
						  <li>
							<form method="POST" action="{{ route('logout') }}">
								@csrf
							
								<x-responsive-nav-link :href="route('logout')"
										onclick="event.preventDefault();
													this.closest('form').submit();">
													  {{ __('Log Out') }}
								  
								</x-responsive-nav-link>
							
								
							  </form>	

							
						</li>
								  
							
							
							
						
						</ul>
					  </div>
					</div>
				  </div>

			
				</div>
			</div>
			
		  </div>
		</div>
</header>
<!-- Header End -->
<!-- Main container -->
@yield('content')

@livewireScripts
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{asset('/js/navigation.js')}}"></script>
<!-- <script src="assets/js/hc-offcanvas-nav.js"></script> -->
<!-- <script>
	(function($) {
	  'use strict';

	  // call our plugin
	  var Nav = new hcOffcanvasNav('#main-nav', {
		disableAt: false,
		customToggle: '.toggle',
		levelSpacing: 40,
		navTitle: '',
		levelTitles: true,
		levelTitleAsBack: true,
		pushContent: '#main',
		labelClose: false
	  });

	  // add new items to original nav
	  $('#main-nav').find('li.add').children('a').on('click', function() {
		var $this = $(this);
		var $li = $this.parent();
		var items = eval('(' + $this.attr('data-add') + ')');

		$li.before('<li class="new"><a href="#">'+items[0]+'</a></li>');

		items.shift();

		if (!items.length) {
		  $li.remove();
		}
		else {
		  $this.attr('data-add', JSON.stringify(items));
		}

		Nav.update(true); // update DOM
	  });

	  // demo settings update

	  const update = function(settings) {
		if (Nav.isOpen()) {
		  Nav.on('close.once', function() {
			Nav.update(settings);
			Nav.open();
		  });

		  Nav.close();
		}
		else {
		  Nav.update(settings);
		}
	  };

	  $('.actions').find('a').on('click', function(e) {
		e.preventDefault();

		var $this = $(this).addClass('active');
		var $siblings = $this.parent().siblings().children('a').removeClass('active');
		var settings = eval('(' + $this.data('demo') + ')');

		if ('theme' in settings) {
		  $('body').removeClass().addClass('theme-' + settings['theme']);
		}
		else {
		  update(settings);
		}
	  });

	  $('.actions').find('input').on('change', function() {
		var $this = $(this);
		var settings = eval('(' + $this.data('demo') + ')');

		if ($this.is(':checked')) {
		  update(settings);
		}
		else {
		  var removeData = {};
		  $.each(settings, function(index, value) {
			removeData[index] = false;
		  });

		  update(removeData);
		}
	  });
	})(jQuery);
  </script> -->
</body>
</html>