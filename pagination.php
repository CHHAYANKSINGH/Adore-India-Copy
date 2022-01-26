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
		margin-left: 15px;
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		max-width: 1480px;
		padding: 80px 0;
	}

	.card {
		position: relative;
		background: #fff;
		max-width: 325px;
		width: 300px;
		height: 430px;
		margin: 25px;
		box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
		border-radius: 10px;
		overflow: hidden;
	}

	/* .card-image {
		max-height: 200px;
	} */

	.card-image img {
		max-width: 100%;
		height: 250px;
	}

	.card-info {
		position: relative;
		color: #222;
		padding: 10px 20px 20px;
	}

	.card-info h3 {
		font-size: 1.6em;
		font-weight: 800;
		margin-bottom: 20px;
		text-align: center;
	}

	.card-info h6 {
		margin-top: 15px;
		text-align: center;
	}

	.card-info p {
		font-size: 1em;
		margin-bottom: 5px;
		text-align: center;
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
		color: black !important;
		text-decoration: none;
		font-size: 1.2em;
		line-height: 4px;
	}

	.previous-page,
	.next-page {
		width: 80px;
		border-radius: 45px !important;
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
		border-radius: 50% !important;
		cursor: pointer;
	}
</style>

<body>
	<div class="main-content-area">
		<section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
			<div class="container1 pt-90 pb-90">
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
		<div class="container1">
			<div class="card-content" id="cards" style="display: none">

				<!-- <div class="pagination">
					<li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
					<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
					<li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
				</div> -->
			</div>
		</div>
	</div>
</body>
<?php include "layouts/footer.php" ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<script>
	// check if products are present in localstorage if not then fetch and set
	if (localStorage.getItem("activity") === null) {
		fetch("https://api.adoreearth.org/activities/").then((res) => {
			return res.json();
			// set this res.json in local storage
		}).then((data) => {
			data = _.orderBy(data, ['timestamp'], ['desc']);
			localStorage.setItem('activity', JSON.stringify(data))
			let data1 = ""
			data.map((values) => {
				data1 += `<div class="card" id=${values.activity_id}>
						<div class="card-image">
						<img src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1} alt="Image" class="w-100">
					</div>
					<div class="card-info">
						<h3>${values.type}</h3>
						<p>Delhi</p>
						<h6><a href="activity-details.php?id=${values.activity_id}"> Read more</a></h6>
					</div>
				</div>`
			});
			document.getElementById("cards").innerHTML = data1;
			console.log(data);
		}).catch((error) => {
			console.log(error);
		});
	} else {
		localStorage.getItem('activity')
		data = JSON.parse(localStorage.getItem('activity'));
		let data1 = ""
		data.map((values) => {
			data1 += `
			<div class="card" id=${values.activity_id}>
						<div class="card-image">
						<img src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1} alt="Image" class="w-100">
					</div>
					<div class="card-info">
						<h3>${values.type}</h3>
						<p>Delhi</p>
						<h6><a href="activity-details.php?id=${values.activity_id}"> Read more</a></h6>
					</div>
				</div>`
			pagination = `<div class="pagination">
					<li class="page-item previous-page disable"><a class="page-link" href="#" style="border-radius: 45px !important;">Prev</a></li>
					<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
					<li class="page-item next-page"><a class="page-link" href="#" style="border-radius: 45px !important;">Next</a></li>
				</div>`
		});
		document.getElementById("cards").innerHTML = data1 + pagination;
		console.log(data);
	}
</script>
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
		var numberOfdata = $(".card-content .card").length;
		var limitPerPage = 8; //How many card data visible per a page
		var totalPages = Math.ceil(numberOfdata / limitPerPage);
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