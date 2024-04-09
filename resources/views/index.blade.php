<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="{{ asset('shortcut icon') }}" href="images/ico/favicon.ico">
    <link rel="{{ asset('apple-touch-icon-precomposed') }}" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="{{ asset('apple-touch-icon-precomposed') }}" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="{{ asset('apple-touch-icon-precomposed') }}" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="{{ asset('apple-touch-icon-precomposed') }}" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	@extends('layout.main-layout')
    @section('layout')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							@foreach($categorys as $cate)

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											 
											{{ $cate->name }}
										</a>
									</h4>
								</div>
								
							</div>	
							@endforeach
							
							
						</div><!--/category-products-->
					
						
						
						 
						
						<div class="shipping text-center"><!--shipping-->
							@foreach ($banners as $banner)
								
							@endforeach
							<img src="{{ asset($banner->image) }}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<div class="col-sm-4">

							<div class="product-image-wrapper">
								@foreach($data as $item)
								
								<div class="single-products">
									<div class="productinfo text-center">
											
											<img src="{{asset($item->image)}}" alt="" height="200px;" width="200px;" />
											<h2>{{ $item->price }}</h2>
											<p>{{ $item->name }}</p>
											<a href="home/{{ $item->id }} }}" class="btn btn-default add-to-cart">Detail</a>
									</div>		
								</div>
						@endforeach 
							</div>
							
						</div>
						
							</div>
							
						</div>
							</div>
			</div>
		</div>
	</section>
	
	@endsection
</body>
</html>