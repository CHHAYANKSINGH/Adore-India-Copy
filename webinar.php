<?php include "layouts/header.php"; ?>

<style>
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

<div class="main-content-area">
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Webinars</h2>
            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
              <div class="breadcrumbs">
                <span><a href="index.php" rel="home">Home</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Programs</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="active">Webinars </span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-tm-bg-color="#fff">
    <div class="container">
      <div class="row" id="webinar">

      </div>
      <div id="pagi" style="justify-content:center; padding-bottom:80px;">

      </div>
    </div>
</div>
<div class="tm-floating-objects">
  <span class="floating-object-1" data-tm-bg-img="images/shape/blog-01.png" data-tm-width="185" data-tm-height="253" data-tm-top="auto" data-tm-bottom="-6" data-tm-left="75" data-tm-opacity="1"></span>
  <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/shape/blog-02.png" data-tm-width="90" data-tm-height="80" data-tm-top="440" data-tm-bottom="auto" data-tm-left="180" data-tm-opacity="1"></span>
  <span class="floating-object-3" data-tm-bg-img="images/shape/blog-03.png" data-tm-width="136" data-tm-height="201" data-tm-top="auto" data-tm-bottom="0" data-tm-right="100" data-tm-left="auto" data-tm-opacity="1"></span>
</div>
</section>
</div>
<?php include "layouts/footer.php" ?>
<script src="js/custom.js"></script>
<script>
          // check if products are present in localstorage if not then fetch and set
          if (localStorage.getItem("webinars") === null) {
            fetch("https://api.adoreearth.org/webinars/").then((res) => {
              return res.json();
              // set this res.json in local storage
            }).then((data) => {
              // document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
              // data = _.orderBy(data, ['timestamp'], ['desc']);
              localStorage.setItem('webinars', JSON.stringify(data));
              console.log(data)
              let data1 = "";
              var pagination = `<div style="justify-content:center;" class="pagination">
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
                  data1 += `<div class="webinar col-md-6 col-lg-4 mb-80" id="${values.webinars_id}">
                              <div class="blog-current-style1 mb-lg-30">
                                <article class="post">
                                  <div class="entry-header">
                                    <div class="post-thumb">
                                      <div class="post-thumb-inner">
                                        <div class="thumb" style="border-radius:15px 15px 0px 0px ;">
                                          <img class="w-100" src="images/blog/session1.jpeg" alt="Image" />
                                        </div>
                                        <div class="meta-date">${values.webinars_date}</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="entry-content" style="border-radius:0px 0px 15px 15px;">
                                    <h6 class="entry-title mt-0">
                                      <p>${values.webname}</p>
                                      <p>Speaker: ${values.speaker_name}</p>
                                    </h6>
                                    <div class="post-btn-readmore">
                                      <a href="${values.webinars_invitation}" class="btn btn-plain-text-with-arrow">Register Now!</a>
                                    </div>
                                  </div>
                                </article>
                              </div>
                            </div>`
                });

              } catch (err) {
                console.log(err);
              }
              document.getElementById("webinar").innerHTML = data1;
              document.getElementById("pagi").innerHTML = pagination;
              console.log(data);
            }).catch((error) => {
              console.log(error);
            });
          } else {
            // document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
            localStorage.getItem('webinars')
            data = JSON.parse(localStorage.getItem('webinars'));
            let data1 = "";
            var pagination = `<div style="justify-content:center;" class="pagination">
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
              console.log(data);
              data.map((values) => {
                data1 += `<div class="webinar col-md-6 col-lg-4 mb-80" id="${values.webinars_id}">
                            <div class="blog-current-style1 mb-lg-30">
                              <article class="post">
                                <div class="entry-header">
                                  <div class="post-thumb">
                                    <div class="post-thumb-inner">
                                      <div class="thumb" style="border-radius:15px 15px 0px 0px ;">
                                        <img class="w-100" src="images/blog/session1.jpeg" alt="Image" />
                                      </div>
                                      <div class="meta-date">${values.webinars_date}</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="entry-content" style="border-radius:0px 0px 15px 15px;">
                                  <h6 class="entry-title mt-0">
                                    <p>${values.webname}</p>
                                    </h6>
                                    <p>Speaker: ${values.speaker_name}</p>
                                  
                                  <div class="post-btn-readmore">
                                    <a href="${values.webinars_invitation}" class="btn btn-plain-text-with-arrow">Register Now!</a>
                                  </div>
                                </div>
                              </article>
                            </div>
                          </div>`


              });
            } catch (err) {
              console.log(err);
            }
            document.getElementById("webinar").innerHTML = data1;
            document.getElementById("pagi").innerHTML = pagination;
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
    var numberOfdata = $(".row .webinar").length;
    var width = window.innerWidth;
    if (width > 1420) {
      var limitPerPage = 9; //How many card data visible per a page
    }
    if (width <= 1420 && width > 1070) {
      var limitPerPage = 6; //How many card data visible per a page
    }
    if (width < 1070 && width > 715) {
      var limitPerPage = 5; //How many card data visible per a page
    }
    if (width < 715) {
      var limitPerPage = 4; //How many card data visible per a page
    }




    var totalPages = Math.ceil(numberOfdata / limitPerPage);
    var paginationSize = 100; //How many page elements visible in the pagination
    var currentPage;

    function showPage(whichPage) {
      if (whichPage < 1 || whichPage > totalPages) return false;

      currentPage = whichPage;

      $(".row .webinar").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

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

    $(".row").show();
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
</body>

</html>