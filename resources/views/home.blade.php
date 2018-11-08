<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
	<style>

	body{
		/*height: 100%;*/
		font-family: 'Poppins', 'Raleway', sans-serif;
	}

	@font-face {
		font-family: Poppins;
		src: url("/fonts/Poppins-Regular.ttf");
	}

	#banner{
		padding-top: 20px;
/*		background-image: url("https://source.unsplash.com/user/erondu/1200x800");*/
		background-image: url("/img/shell__02.jpg");
		background-size: cover;
		background-color: #444;
		background-blend-mode: multiply;			
		color: white;
		text-align: center;

	}


	#punch-highlight{
		outline: 2px solid #fff;
		outline-offset: .25em; 
		color: rgb(239, 189, 7);
		font-size: 3.5rem;
		margin: .5em 0 0.5em;
		text-transform: uppercase;
		letter-spacing: 15px;

	}

	.no-gutters{
		margin-right: 0;
		margin-left: 0;
	}

	.title{
		font-weight: 600;
		line-height: 1.4;
	}

	.card.item p{
		font-size: .92em;
	}
	
	.card-title{
		font-size: 1.12rem;
	}


	.bs-mat-01{
		box-shadow: 0 10px 40px 0 rgba(62, 57, 107, 0.07), 0 2px 9px 0 rgba(62, 57, 107, 0.06);		
	}
	
	.holder{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
	} 

	.card-footer{
		font-size: .85em;
	}
	
	.holder .item{
		flex-basis: 16rem;
	}
	
	@media screen and max-width(991px){
	/*	.holder{
			flex-direction: row;
		}*/
	}
	

</style>

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bs-mat-01">
			<a class="navbar-brand" href="#">
				<img src="img/logo_sm.png" alt="" height="40">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>
		</nav>
	</header>

	<main>
		<!-- 		banner -->
		<div class="container-fluid" id="banner" style="min-height: 100vh">

			<div class="row h-100" style="min-height: 100vh">
				<div class="col align-items-center justify-content-center d-flex flex-column">
					<h3>Welcome to</h3>
					<h1 id="punch-highlight">Shell <strong>Magallanes</strong></h1>					

				</div>
			</div>	
		</div>		


		<div style="min-height:100vh; background: rgb(240, 242, 246);" class="py-5">
			<div class="container">
				<!-- specials -->
				<h3 class="my-3">Todays Specials</h3>
				<div class="row mt-3 mb-5">
					<div class="col-md-3">	
						<div class="card item bs-mat-01" style="/*height: 513.141px;*/">
							<div class="card-content">
								<img class="card-img-top img-fluid" src="https://source.unsplash.com/user/erondu/250x250" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">Smart Wearable</h4>
									<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
										candy.
									</p>
								</div>
							</div>
							<div class="card-footer text-muted">
								<del class="float-left mr-1">$380</del>
								<span class="float-left">$349</span>
								<span class="float-right add-to-cart">Add To Cart <i class="fa fa-cart-plus"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">	
						<div class="card item" style="/*height: 513.141px;*/">
							<div class="card-content">
								<img class="card-img-top img-fluid" src="https://source.unsplash.com/user/erondu/250x250" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">Smart Wearable</h4>
									<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
										candy.
									</p>
								</div>
							</div>
							<div class="card-footer text-muted">
								<span class="float-left">$349</span>
								<span class="float-right add-to-cart">Add To Cart <i class="fa fa-cart-plus"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">	
						<div class="card" style="/*height: 513.141px;*/">
							<div class="card-content">
								<img class="card-img-top img-fluid" src="https://source.unsplash.com/user/erondu/250x250" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">Smart Wearable</h4>
									<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
										candy.
									</p>
								</div>
							</div>
							<div class="card-footer text-muted">
								<span class="float-left">$349</span>
								<span class="float-right add-to-cart">Add To Cart <i class="fa fa-cart-plus"></i></span>
							</div>
						</div>
					</div>
					<div class="col-md-3">	
						<div class="card" style="/*height: 513.141px;*/">
							<div class="card-content">
								<img class="card-img-top img-fluid" src="https://source.unsplash.com/user/erondu/250x250" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title">Smart Wearable</h4>
									<p class="card-text">Oat cake ice cream candy chocolate cake chocolate cake cotton
										candy.
									</p>
								</div>
							</div>
							<div class="card-footer text-muted">
								<span class="float-left">$349</span>
								<span class="float-right">Add To Cart <i class="fa fa-cart-plus"></i></span>
							</div>
						</div>
					</div>	
				</div>	
				<!-- redeemables -->
				<h3 class="my-3">Top Redeemable Items</h3>
				<div class="row">	
					<div class="col-sm-12">
						<div class="card">
							<div class="row no-gutters">
								<div class="col-lg-4 col-md-4 " style="background: #eceded">
									<div class="card-body mb-5 ">
										<h5 class="title mb-3" >Machinery items for manufacturers</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit minus nesciunt aspernatur hic aperiam odio, quas est commodi totam aliquid pariatur praesentium nostrum placeat mollitia odit tempore. Modi, eveniet a.</p>
										<a href="#" class="btn btn-warning w-25">Explore</a>

									</div>

								</div>
								<div class="col-md-8 holder">
									<div class="card border-0 item">
										<img class="card-img-top" src="https://source.unsplash.com/user/erondu/800x600" alt="Card image cap">
										<div class="card-body">	
											<h5 class="card-title">product1</h5>
											<p>	Lorem ipsum dolor sit amet</p>
										</div>
									</div>
									<div class="card border-0 item">
										<img class="card-img-top" src="https://source.unsplash.com/user/erondu/800x600" alt="Card image cap">
										<div class="card-body">	
											<h5 class="card-title">product1</h5>
											<p>	Lorem ipsum dolor sit amet</p>
										</div>
									</div>
									<div class="card border-0 item">
										<img class="card-img-top" src="https://source.unsplash.com/user/erondu/800x600" alt="Card image cap">
										<div class="card-body">	
											<h5 class="card-title">product1</h5>
											<p>	Lorem ipsum dolor sit amet</p>
										</div>
									</div>
									<div class="card border-0 item">
										<img class="card-img-top" src="https://source.unsplash.com/user/erondu/800x600" alt="Card image cap">
										<div class="card-body">	
											<h5 class="card-title">product1</h5>
											<p>	Lorem ipsum dolor sit amet</p>
										</div>
									</div>
								</div>
							</div>
						</div> 

					</div>
				</div>			
			</div>
		</div>


	</main>
	<footer>
		
	</footer>

	
	<script src="/js/jquery-3.3.1.min.js"></script> 
	<!-- <script src="/js/popper.min.js"></script> -->
	<script src="/js/bootstrap.min.js"></script>

</body>
</html>