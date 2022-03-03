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
    padding-top: 100px;
    padding-bottom: 50px;
  }

  .card {
    position: relative;
    background: #fff;
    max-width: 325px;
    width: 300px;
    height: 450px;
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
    padding-top: 10px;
  }

  .card-info h6 {
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
    padding-top: 30px;
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

  .pagination li a:hover {
    color: #fff !important;
  }

  .previous-page,
  .next-page {
    width: 70px;
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

  @media (max-width:700px) {
    .pagination {
      text-align: center;
      margin: 20px 20px 40px;
      user-select: none;
      padding-top: 20px;
    }

    .pagination li {
      margin: 0px !important;
    }

    .pagination li a {
      font-size: 0.8em;
    }

    .previous-page,
    .next-page {
      width: 50px;
      border-radius: 45px !important;
      cursor: pointer;
      transition: 0.3s ease;
    }


  }

  @media (max-width:460px) {
    .pagination {
      text-align: center;
      margin: 10px 10px 20px;
      user-select: none;
      padding-top: 20px;
    }

    .pagination li:not(:first-child) {
      width: 30px !important;
      margin: 0px !important;
    }

    .pagination li a {
      height: 25px !important;
      width: 25px !important;
      font-size: 0.6em;
    }

    .previous-page,
    .next-page {
      width: 40px;
      border-radius: 45px !important;
      cursor: pointer;
      transition: 0.3s ease;
    }


  }
</style>

<body>
  <div class="main-content-area">
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container1 pt-90 pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Activities</h2>
              <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                <div class="breadcrumbs">
                  <span><a href="index.php" rel="home">Home</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span><a href="#">Pages</a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="active">Activities </span>
                </div>
              </nav><br>
              <p class="paragraph mb-0" style="font-size: large;">
                Various interactive sessions are conducted on various topics like etiquette-based learning to self-development and from career-orientation to career building.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container1">
      <!-- Start of Preloader -->
      <div class="preloader-floating-circles">
        <div class="f_circleG" id="frotateG_01"></div>
        <div class="f_circleG" id="frotateG_02"></div>
        <div class="f_circleG" id="frotateG_03"></div>
        <div class="f_circleG" id="frotateG_04"></div>
        <div class="f_circleG" id="frotateG_05"></div>
        <div class="f_circleG" id="frotateG_06"></div>
        <div class="f_circleG" id="frotateG_07"></div>
        <div class="f_circleG" id="frotateG_08"></div>
      </div>
      <!-- End of Preloader -->

      <div class="card-content" id="cards" style="display: none">

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
      document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
      data = _.orderBy(data, ['timestamp'], ['desc']);
      localStorage.setItem('activity', JSON.stringify(data));
      var users = JSON.parse(localStorage.getItem('users'));
      let currentUser = {};
      let data1 = "";
      var pagination = `<div class="pagination">
					<li class="page-item previous-page disable"><a class="page-link" href="#" style="border-radius: 45px !important;">Prev</a></li>
					<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
					<li class="page-item next-page"><a class="page-link" href="#" style="border-radius: 45px !important;">Next</a></li>
				</div>`;


      try {
        data.map((values) => {
          currentUser = _.find(users, u => {
            return u.u_id == values.u_id
          });
          if (currentUser) {
            data1 += `<div class="card" id=${values.activity_id}>
						<div class="card-image">
						<img src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1} onerror="this.onerror=null;this.src='images/JM1.png'" alt="Image" class="w-100">
					</div>
					<div class="card-info">
						<h6><a href = "user.php?id=${currentUser.u_id}">${currentUser.f_name + " " + currentUser.l_name}</a></h6>
						<p>${currentUser.city}</p>
						<h6>Activity : ${values.type}</h6>
						<h6><a href="activity-details.php?id=${values.activity_id}"> Read more</a></h6>
					</div>
				</div>`
          }

        });

      } catch (err) {
        console.log(currentUser, err);
      }
      document.getElementById("cards").innerHTML = data1 + pagination;

    }).catch((error) => {
      console.log(error);
    });
  } else {
    document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
    localStorage.getItem('activity')
    data = JSON.parse(localStorage.getItem('activity'));
    var users = JSON.parse(localStorage.getItem('users'));
    let currentUser = {};
    let data1 = "";
    var pagination = `<div class="pagination">
					<li class="page-item previous-page disable"><a class="page-link" href="#" style="border-radius: 45px !important;">Prev</a></li>
					<li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">5</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">6</a></li>
					<li class="page-item dots"><a class="page-link" href="#">...</a></li>
					<li class="page-item current-page"><a class="page-link" href="#">10</a></li>
					<li class="page-item next-page"><a class="page-link" href="#" style="border-radius: 45px !important;">Next</a></li>
				</div>`
    try {

      data.map((values) => {
        currentUser = _.find(users, u => {
          return u.u_id == values.u_id
        });
        if (currentUser) {
          data1 += `<div class="card" id=${values.activity_id}>
						<div class="card-image">
						<img src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1} onerror="this.onerror=null;this.src='images/JM1.png'" alt="Image" class="w-100">
					</div>
					<div class="card-info">
						<h6><a href = "user.php?id=${currentUser.u_id}">${currentUser.f_name+ " " + currentUser.l_name}</a></h6>
						<p>${currentUser.city}</p>
						<h6>Activity : ${values.type}</h6>
						<h6><a href="activity-details.php?id=${values.activity_id}"> Read more</a></h6>
					</div>
				</div>`
        }

      });
    } catch (err) {
      console.log(currentUser, err);
    }
    document.getElementById("cards").innerHTML = data1 + pagination;

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
    var width = window.innerWidth;
    console.log("width " + width);
    if (width > 1420) {
      var limitPerPage = 16; //How many card data visible per a page
    }
    if (width <= 1420 && width > 1070) {
      var limitPerPage = 12; //How many card data visible per a page
    }
    if (width < 1070 && width > 715) {
      var limitPerPage = 8; //How many card data visible per a page
    }
    if (width < 715) {
      var limitPerPage = 5; //How many card data visible per a page
    }




    var totalPages = Math.ceil(numberOfdata / limitPerPage);
    var paginationSize = 100; //How many page elements visible in the pagination
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