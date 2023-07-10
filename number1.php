<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<!-- Font Awesome -->
	<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	rel="stylesheet"
	/>
	<!-- Google Fonts -->
	<link
	href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	rel="stylesheet"
	/>
	<!-- MDB -->
	<link
	href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
	rel="stylesheet"
	/>

	<link href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet"/>
</head>
<body>

	<header>
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<!-- Container wrapper -->
		<div class="container-fluid">
			<!-- Toggle button -->
			<button
			class="navbar-toggler"
			type="button"
			data-mdb-toggle="collapse"
			data-mdb-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation"
			>
			<i class="fas fa-bars"></i>
			</button>

			<!-- Collapsible wrapper -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Navbar brand -->
			<a class="navbar-brand mt-2 mt-lg-0" href="#">
				<img
				src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
				height="15"
				alt="MDB Logo"
				loading="lazy"
				/>
			</a>
			<!-- Left links -->
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Team</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="#">Projects</a>
				</li>
			</ul>
			<!-- Left links -->
			</div>
			<!-- Collapsible wrapper -->

			<!-- Right elements -->
			<div class="d-flex align-items-center">
			<!-- Icon -->
			<a class="text-reset me-3" href="#">
				<i class="fas fa-shopping-cart"></i>
			</a>

			<!-- Notifications -->
			<div class="dropdown">
				<a
				class="text-reset me-3 dropdown-toggle hidden-arrow"
				href="#"
				id="navbarDropdownMenuLink"
				role="button"
				data-mdb-toggle="dropdown"
				aria-expanded="false"
				>
				<i class="fas fa-bell"></i>
				<span class="badge rounded-pill badge-notification bg-danger">1</span>
				</a>
				<ul
				class="dropdown-menu dropdown-menu-end"
				aria-labelledby="navbarDropdownMenuLink"
				>
				<li>
					<a class="dropdown-item" href="#">Some news</a>
				</li>
				<li>
					<a class="dropdown-item" href="#">Another news</a>
				</li>
				<li>
					<a class="dropdown-item" href="#">Something else here</a>
				</li>
				</ul>
			</div>
			<!-- Avatar -->
			<div class="dropdown">
				<a
				class="dropdown-toggle d-flex align-items-center hidden-arrow"
				href="#"
				id="navbarDropdownMenuAvatar"
				role="button"
				data-mdb-toggle="dropdown"
				aria-expanded="false"
				>
				<img
					src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
					class="rounded-circle"
					height="25"
					alt="Black and White Portrait of a Man"
					loading="lazy"
				/>
				</a>
				<ul
				class="dropdown-menu dropdown-menu-end"
				aria-labelledby="navbarDropdownMenuAvatar"
				>
				<li>
					<a class="dropdown-item" href="#">My profile</a>
				</li>
				<li>
					<a class="dropdown-item" href="#">Settings</a>
				</li>
				<li>
					<a class="dropdown-item" href="#">Logout</a>
				</li>
				</ul>
			</div>
			</div>
			<!-- Right elements -->
		</div>
		<!-- Container wrapper -->
		</nav>
		<!-- Navbar -->
	</header>

	<main class="container">

		<section class="row my-5">
			<div class="col-12">


<?php

$word1 = 'class';
$word2 = 'kodego';
$word3 = 'top';

function checker($word){

	if(strlen($word) > 5){
		$result = ' More than 5 <br>';
	}else{
		$result = ' Not more than 5 <br>';
	}

	return $result;
}

echo $word1 . ' is' . checker($word1); 
echo $word2 . ' is' . checker($word2); 
echo $word3 . ' is' . checker($word3); 


?>

</div>
		</section>
	</main>

	<!-- Footer -->
	<footer class="bg-dark text-center text-white">
		<!-- Grid container -->
		<div class="container p-4">
			<!-- Section: Social media -->
			<section class="mb-4">
			<!-- Facebook -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-facebook-f"></i
			></a>

			<!-- Twitter -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-twitter"></i
			></a>

			<!-- Google -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-google"></i
			></a>

			<!-- Instagram -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-instagram"></i
			></a>

			<!-- Linkedin -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-linkedin-in"></i
			></a>

			<!-- Github -->
			<a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
				><i class="fab fa-github"></i
			></a>
			</section>
			<!-- Section: Social media -->

			<!-- Section: Form -->
			<section class="">
			<form action="">
				<!--Grid row-->
				<div class="row d-flex justify-content-center">
				<!--Grid column-->
				<div class="col-auto">
					<p class="pt-2">
					<strong>Sign up for our newsletter</strong>
					</p>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-md-5 col-12">
					<!-- Email input -->
					<div class="form-outline form-white mb-4">
					<input type="email" id="form5Example21" class="form-control" />
					<label class="form-label" for="form5Example21">Email address</label>
					</div>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-auto">
					<!-- Submit button -->
					<button type="submit" class="btn btn-outline-light mb-4">
					Subscribe
					</button>
				</div>
				<!--Grid column-->
				</div>
				<!--Grid row-->
			</form>
			</section>
			<!-- Section: Form -->

			<!-- Section: Text -->
			<section class="mb-4">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
				repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
				eum harum corrupti dicta, aliquam sequi voluptate quas.
			</p>
			</section>
			<!-- Section: Text -->

			<!-- Section: Links -->
			<section class="">
			<!--Grid row-->
			<div class="row">
				<!--Grid column-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">Links</h5>

				<ul class="list-unstyled mb-0">
					<li>
					<a href="#!" class="text-white">Link 1</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 2</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 3</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 4</a>
					</li>
				</ul>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">Links</h5>

				<ul class="list-unstyled mb-0">
					<li>
					<a href="#!" class="text-white">Link 1</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 2</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 3</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 4</a>
					</li>
				</ul>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">Links</h5>

				<ul class="list-unstyled mb-0">
					<li>
					<a href="#!" class="text-white">Link 1</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 2</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 3</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 4</a>
					</li>
				</ul>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
				<h5 class="text-uppercase">Links</h5>

				<ul class="list-unstyled mb-0">
					<li>
					<a href="#!" class="text-white">Link 1</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 2</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 3</a>
					</li>
					<li>
					<a href="#!" class="text-white">Link 4</a>
					</li>
				</ul>
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
			</section>
			<!-- Section: Links -->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyright:
			<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer -->



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<!-- MDB -->
	<script
	type="text/javascript"
	src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
	></script>

	<script
	type="text/javascript"
	src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"
	></script>

	<script>
		let table = new DataTable('#myTable');
	</script>

</body>
</html>
