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
      font-size:21px !important;
      padding:0 !important;
    }
    .txt {
      font-size:9px !important;
    }
  }

  @media (min-width:510px) and (max-width:768px) {
    
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
            <h2 class="title">XperTalk</h2>
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
    <div class="sec col-lg-7 col-sm-7 col-10">
      <h2 class="heading" style="margin: 0; padding-bottom:10px;">Xper<span class="heading" style="color:#24a8e6;">Talk</span></h2>
      <h6 class="txt"><span class="txt" style="font-weight: 200;">An Open forum for discussion on relevant topics by curated panels of professionals from all over the world. Our Objective is to promote open and healthy discussion and sharing of different perspectives, opinions amongst diverse and global audiences.</h6>
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