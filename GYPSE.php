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
      padding: 10px !important;
    }
    .heading {
      font-size:17px !important;
      padding:0 !important;
      margin-top:15px !important;
    }
    .txt {
      font-size:9px !important;
    }

    .pos {
      margin:0px !important;
    }

  }

  @media (min-width:510px) and (max-width:768px) {
    
    .sec {
      padding: 30px !important;
    }
    .heading {
      font-size:28px !important;
      padding:0 !important;
      margin-top:15px !important;
    }
    .txt {
      font-size:15px !important;
    }
    
    .pos {
      margin:0 !important;
    }

  }

  @media (min-width:770px) and (max-width:1024px) {
    .sec {
      padding: 40px !important;
    }
    .heading {
      font-size:35px !important;
      padding:0 !important;
      margin-top:15px !important;
    }
    .txt {
      font-size:20px !important;
    }

    .pos {
      margin:0 !important;
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
            <h2 class="title">GYPSE</h2>
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
  <section>
    <div class="sec col-lg-8 col-sm-8 col-10">
      <h2 class="heading" style="margin: 0; padding-bottom:10px;">Global Youth Program For Social Exchange</h2>
      <h6 class="txt"><span class="txt" style="font-weight: 200;">Self - awareness is key, but knowledge about other cultures is very beneficial for the youths to function effectively in this fast paced world. Through <span class="txt" style="font-weight: 600;">GYPSE</span>, we would like to provide a platform to the youth to connect with youths across countries.</h6>
      <h2 class="heading" style="border-bottom:2px solid #0073aa;font-size:25px;margin-top:40px;">Objective </h2>
      <ul style="color:black;">
        <li class="txt">To give a platform to the youths to interact with each other and impart information about different countries.</li>
        <li class="txt">Youths to gain cultural competence/knowledge to possess mutual respect.</li>
        <li class="txt">Youths to build more confidence while interacting with others from different cultural backgrounds.</li>
        <li class="txt">Gain more insight and better understanding of the world around us.</li>
      </ul>
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