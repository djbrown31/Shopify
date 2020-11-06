<?php
	session_start();
	include "inc/head.inc.php";
?>

	<!--HEADER-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Office Blankets</h1>
				<?php
					if(isset($_SESSION['username'])){
						echo "<p>Welcome back, ".$_SESSION['username']."!</p>";
					}
					?>
				<p>Offering a wide range of Customizable Office Blankets</p>
			</div>
		</div>
	</header>

	<!--MAIN-->
	<main class='container'>
		<div>
			<div class='row'>
			<div class="col-md-3">
			<p class="lead">Product Range</p>
			<p>Computers</p>
			<div class="list-group">
				<a href="#" class="list-group-item">Category 1</a>
				<a href="#" class="list-group-item">Category 2</a>
				<a href="#" class="list-group-item">Category 3</a>
			</div>
			<p>Cars</p>
			<div class="list-group">
				<a href="#" class="list-group-item">Category 4</a>
				<a href="#" class="list-group-item">Category 5</a>
				<a href="#" class="list-group-item">Category 6</a>
			</div>
			</div>
			<div class="col-md-9">
			<div class="row carousel-holder">
				<div class="col-md-12">
					<div id="carousel-example-generic" class="carousel-slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="slide-image" src="car1.jpg" alt="">
							</div>
							<div class="item active">
								<img class="slide-image" src="car2.jpg" alt="">
							</div>
							<div class="item active">
								<img class="slide-image" src="car3.jpg" alt="">
							</div>
							</div>
							<a class="left carousel-control href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

							<a class="right carousel-control href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="thumbnail">
					<img src="C:\xampp2\htdocs\Shopify\img\car1.jpg" alt="Thumbnail Image">
					<div class="caption">
						<h4 class="pull-right">$35,000</h4>
						<h4><a href="#">A Product</a></h4>
						<p>This is a short description. Lorem Ipsum</p>
					</div>
					<div class="ratings">
						<p class="pull-right">15 Reviews</p>
						<p>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						</p>
					</div>
				</div>
				<div class="thumbnail">
					<img src="C:\xampp2\htdocs\Shopify\img\car2.jpg" alt="Thumbnail Image">
					<div class="caption">
						<h4 class="pull-right">$35,000</h4>
						<h4><a href="#">A Product</a></h4>
						<p>This is a short description. Lorem Ipsum</p>
					</div>
					<div class="ratings">
						<p class="pull-right">15 Reviews</p>
						<p>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						</p>
					</div>
				</div>
				<div class="thumbnail">
					<img src="C:\xampp2\htdocs\Shopify\img\car3.jpg" alt="Thumbnail Image">
					<div class="caption">
						<h4 class="pull-right">$35,000</h4>
						<h4><a href="#">A Product</a></h4>
						<p>This is a short description. Lorem Ipsum</p>
					</div>
					<div class="ratings">
						<p class="pull-right">15 Reviews</p>
						<p>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						<span class="glyphicon gliphicon-star"></span>
						</p>
					</div>
				</div>
			</div>
			</div>
			</div>

		</div>
	</main>
	<!--FOOTER-->
	<?php
		include "inc/foot.inc.php";
	?>