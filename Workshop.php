<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  body {
    background-color: #a4d4ff;

  }

  section {
    display: flex;
  }

  .sec {
    background-color: #fff;
    margin-left: 25px;
    margin-right: 25px;
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 80px;
  }


  .par {
    padding: 30px;
  }


  img {
    background: cover;
  }

  @media (max-width:500px) {
    section {
      justify-content:center !important;
    }
    .sec {
      padding: 20px !important;
    }
    .heading {
      font-size:25px !important;
      padding:0 !important;
    }
    .txt {
      font-size:10px !important;
    }
  }

  @media (min-width:510px) and (max-width:768px) {
    section {
      justify-content:center !important;
    }
    .sec {
      padding: 30px !important;
    }
    .heading {
      font-size:35px !important;
      padding:0 !important;
    }
    .txt {
      font-size:15px !important;
    }
  }

  @media (min-width:770px) and (max-width:1024px) {
    .sec {
      padding: 40px !important;
    }
    .heading {
      font-size:40px !important;
      padding:0 !important;
    }
    .txt {
      font-size:20px !important;
    }
  }

</style>
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Workshops</h2>
            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
              <div class="breadcrumbs">
                <span><a href="index.php" rel="home">Home</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Pages</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="active">Page Title</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: User -->
  <section style="justify-content:center;">
    <div class="sec col-lg-8 col-sm-10 col-10">
      <h2 class="heading" style="margin: 0; padding-bottom:10px;">Work<span class="heading" style="color:#24a8e6;">Shops</span></h2>
      <h6><span class="txt" style="font-weight: 200;">Skill development workshops are designed for college and university students to enhance different skills for 10 or 14 continuous days. A combination of several <span class="txt" style="font-weight: 700;">softs skills</span> are discussed, as well as some <span class="txt" style="font-weight: 700;">technical skills</span> too. It is completely free of charge, and we ask only for participants' valuable time and effort.</h6>
    </div>
  </section>
  <!-- End Divider -->
</div>
<!-- end main-content -->

<!-- Footer -->
<?php include "layouts/footer.php" ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

</html>