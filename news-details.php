<?php include "layouts/header.php"; ?>


<div class="main-content-area">
	<!-- Section: page title -->
	<section class=" page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
		<div class="container pt-90 pb-90">
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title">Our Newsletters</h2>
						<nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
							<div class="breadcrumbs">
								<span><a href="#" rel="home">Home</a></span>
								<span><i class="fa fa-angle-right"></i></span>
								<span><a href="#">Pages</a></span>
								<span><i class="fa fa-angle-right"></i></span>
								<span class="active">News Details</span>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>


	<div class="row">
		<div class="col-sm-4">
			<div class="list">
				<ul type="none">
					<li>JULY 2, 2021</li>
					<li>
						<a href=# onclick="myFunction(this)" id="1">
							<h4>February 2021</h4>
						</a></a>
					</li>
					<hr>
					<li>FEBRUARY 22, 2021</li>
					<li>
						<a href=# onclick="myFunction(this)" id="2">
							<h4>January 2021</h4>
						</a>
					</li>
					<hr>
					<li>JANUARY 12, 2021</li>
					<li>
						<a href=# onclick="myFunction(this)" id="3">
							<h4>December 2020</h4>
						</a>
					</li>
					<hr>
					<li>DECEMBER 10, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="4">
							<h4>November 2020</h4>
						</a>
					</li>
					<hr>
					<li> NOVEMBER 1, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="5">
							<h4>October 2020</h4>
						</a>
					</li>
					<hr>
					<li> OCTOBER 1, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="6">
							<h4>Spetember 2020</h4>
						</a>
					</li>
					<hr>
					<li> SEPTEMBER 17, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="7">
							<h4>August 2020</h4>
						</a>
					</li>
					<hr>
					<li> AUGUST 8, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="8">
							<h4>July 2020</h4>
						</a>
					</li>
					<hr>
					<li> JULY 9, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="9">
							<h4>June 2020</h4>
						</a>
					</li>
					<hr>
					<li> JUNE 9, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="10">
							<h4>May 2020</h4>
						</a>
					</li>
					<hr>
					<li> MAY 11, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="11">
							<h4>April 2020</h4>
						</a>
					</li>
					<hr>
					<li> APRIL 22, 2020</li>
					<li>
						<a href=# onclick="myFunction(this)" id="12">
							<h4>March 2020</h4>
						</a>
					</li>
					<hr>

				</ul>
			</div>
		</div>
		<div class="col-sm-8" id="iframe">
			<!-- <iframe class="embed-responsive-item" src="https://adoreearth.org/public_data/global_youth_feb2021.pdf"></iframe> -->
			<!-- <img src="images/newsletter.png" alt=""> -->
		</div>
	</div>
</div>


</div>
<style>
	.list {
		margin: 40px 10px 60px 100px;
		/* margin-left: 100px;
            margin-right: 700px; */
	}

	.embed-responsive-item {
		margin: 40px 10px 60px 100px;
		width: 80%;
		height: 80%;
	}

	@media only screen and (max-width: 600px) {
		.list {
			margin: 40px 10px 60px 10px;
			/* margin-left: 100px;
            margin-right: 700px; */
		}

		.embed-responsive-item {
			margin: 20px 10px 30px 10px;
			width: 80%;
			height: 80%;
		}
	}
</style>
</body>
<?php include "layouts/footer.php" ?>
<script src="js/custom.js"></script>
<script>
	window.onload = function() {
		data = `<img src="images/newsletter.png" alt="">`
		document.getElementById("iframe").innerHTML = data;
		console.log(data);
	}

	function myFunction(elem) {
		console.log(elem.id);
		if (elem.id == 1) {
			src = "https://adoreearth.org/public_data/global_youth_feb2021.pdf";
		} else if (elem.id == 2) {
			src = "https://adoreearth.org/public_data/global_youth_jan2021.pdf";
		} else if (elem.id == 3) {
			src = "https://adoreearth.org/public_data/global_youth_dec2020.pdf";
		} else if (elem.id == 4) {
			src = "https://adoreearth.org/public_data/global_youth_nov2020.pdf";
		} else if (elem.id == 5) {
			src = "https://adoreearth.org/public_data/global_youth_oct2020.pdf";
		} else if (elem.id == 6) {
			src = "https://adoreearth.org/public_data/global_youth_sep2020.pdf";
		} else if (elem.id == 7) {
			src = "https://adoreearth.org/public_data/global_youth_aug2020.pdf";
		} else if (elem.id == 8) {
			src = "https://adoreearth.org/public_data/global_youth_jul2020.pdf";
		} else if (elem.id == 9) {
			src = "https://adoreearth.org/public_data/global_youth_jun2020.pdf";
		} else if (elem.id == 10) {
			src = "https://adoreearth.org/public_data/global_youth_may2020.pdf";
		} else if (elem.id == 11) {
			src = "https://adoreearth.org/public_data/global_youth_apr2020.pdf";
		} else if (elem.id == 12) {
			src = "https://adoreearth.org/public_data/global_youth_mar2020.pdf";
		} else {
			src = "images/newsletter.png";
		}
		console.log(src);
		data = `<iframe class="embed-responsive-item" src="${src}"></iframe>`
		document.getElementById("iframe").innerHTML = data;
	}
</script>

</html>