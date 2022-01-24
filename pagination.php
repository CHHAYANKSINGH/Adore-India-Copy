<?php include "layouts/header.php"; ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script> -->

<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Poppins", sans-serif;
	}

	.card-content {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
		margin: 30px;
	}

	.card {
		position: relative;
		background: #fff;
		max-width: 325px;
		width: 325px;
		height: auto;
		margin: 15px;
		box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
		border-radius: 10px;
		overflow: hidden;
	}

	/* .card-image {
		max-height: 200px;
	} */

	.card-image img {
		max-width: 100%;
		height: auto;
	}

	.card-info {
		position: relative;
		color: #222;
		padding: 10px 20px 20px;
	}

	.card-info h3 {
		font-size: 1.8em;
		font-weight: 800;
		margin-bottom: 5px;
	}

	.card-info p {
		font-size: 1em;
		margin-bottom: 5px;
	}

	.pagination {
		text-align: center;
		margin: 30px 30px 60px;
		user-select: none;
	}

	.pagination li {
		display: inline-block;
		margin: 5px;
	}

	.pagination li a {
		color: #fff;
		text-decoration: none;
		font-size: 1.2em;
		line-height: 4px;
	}

	.previous-page,
	.next-page {
		width: 80px;
		border-radius: 45px;
		cursor: pointer;
		transition: 0.3s ease;
	}

	.previous-page:hover {
		transform: translateX(-5px);
	}

	.next-page:hover {
		transform: translateX(5px);
	}

	.current-page,
	.dots {
		/* background: #ccc; */
		width: 45px;
		border-radius: 50%;
		cursor: pointer;
	}
</style>

<body>
	<div class="main-content-area">
		<section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
			<div class="container pt-90 pb-90">
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title">Activities</h2>
							<nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
								<div class="breadcrumbs">
									<span><a href="#" rel="home">Home</a></span>
									<span><i class="fa fa-angle-right"></i></span>
									<span><a href="#">Pages</a></span>
									<span><i class="fa fa-angle-right"></i></span>
									<span class="active">Activities </span>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="container">
			<div class="card-content" style="display: none">
				<div class="card">
					<div class="causes-thumb">
						<img src="images/causes/c01.jpg" alt="Image" class="w-100">
					</div>
					<div class="card-info">
						<h3>Let’s Fight for Global Warnings</h3>
						<p>Delhi</p>
						<h6>><a href="activity-details.php"> Read more</a></h6>
					</div>
				</div>
				<div class="card">
					<div class="card-image"><img src="images/causes/c02.jpg" alt=""></div>
					<div class="card-info">
						<h3>Eco System for Global Warnings</h3>
						<p>Kolkata</p>
						<h6>><a href="activity-details.php"> Read more</a></h6>
					</div>
				</div>
				<div class="card">
					<div class="card-image"><img src="images/causes/c03.jpg" alt=""></div>
					<div class="card-info">
						<h3>Let’s Fight for Global Warnings</h3>
						<p>Mumbai</p>
						<h6>><a href="activity-details.php"> Read more</a></h6>
					</div>
				</div>
				<div class="card">
					<div class="card-image"><img src="images/bg/bg1.png" alt=""></div>
					<div class="card-info">
						<h3>Card 04</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<h6>><a href="activity-details.php"> Read more</a></h6>
					</div>
				</div>
				<div class="card">
					<div class="card-image"><img src="images/bg/bg1.png" alt=""></div>
					<div class="card-info">
						<h3>Card 05</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<h6>><a href="activity-details.php"> Read more</a></h6>
					</div>
				</div>
				<div class="card">
					<div class="card-image"><img src="images/bg/bg1.png" alt=""></div>
					<div class="card-info">
						<h3>Card 06</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="pagination">
					<li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
					<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
					<li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
				</div>
			</div>
		</div>
	</div>
</body>
<?php include "layouts/footer.php" ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<script type="text/javascript">
	function getPageList(totalPages, page, maxLength) {
		function range(start, end) {
			return Array.from(Array(end - start + 1), (_, i) => i + start);
		}

		var sideWidth = maxLength < 9 ? 1 : 2;
		var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
		var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

		if (totalPages <= maxLength) {
			return range(1, totalPages);
		}

		if (page <= maxLength - sideWidth - 1 - rightWidth) {
			return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
		}

		if (page >= totalPages - sideWidth - 1 - rightWidth) {
			return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
		}

		return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
	}

	$(function() {
		var numberOfItems = $(".card-content .card").length;
		var limitPerPage = 3; //How many card items visible per a page
		var totalPages = Math.ceil(numberOfItems / limitPerPage);
		var paginationSize = 7; //How many page elements visible in the pagination
		var currentPage;

		function showPage(whichPage) {
			if (whichPage < 1 || whichPage > totalPages) return false;

			currentPage = whichPage;

			$(".card-content .card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

			$(".pagination li").slice(1, -1).remove();

			getPageList(totalPages, currentPage, paginationSize).forEach(item => {
				$("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
					.toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
						.attr({
							href: "javascript:void(0)"
						}).text(item || "...")).insertBefore(".next-page");
			});

			$(".previous-page").toggleClass("disable", currentPage === 1);
			$(".next-page").toggleClass("disable", currentPage === totalPages);
			return true;
		}

		$(".pagination").append(
			$("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
				href: "javascript:void(0)"
			}).text("Prev")),
			$("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
				href: "javascript:void(0)"
			}).text("Next"))
		);

		$(".card-content").show();
		showPage(1);

		$(document).on("click", ".pagination li.current-page:not(.active)", function() {
			return showPage(+$(this).text());
		});

		$(".next-page").on("click", function() {
			return showPage(currentPage + 1);
		});

		$(".previous-page").on("click", function() {
			return showPage(currentPage - 1);
		});
	});
</script>
<script src="js/custom.js"></script>

</html>