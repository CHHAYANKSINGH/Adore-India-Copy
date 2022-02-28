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
            <h2 class="title">WiseTalk</h2>
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
      <img class="pos" style="border-radius: 4px;border: 4px solid #275e85;margin-bottom: 60px;" src="images/WiseTalk.jpeg" alt="image">
      <h6><span class="txt" style="font-weight: 400;">WiseTalk provides a platform to gather knowledge and experiences which can provide an immense help to the younger generations with the help of experience of senior citizens.
          Through these fun learning sessions, we interact and make new friends.
      </h6>
      <h2 class="heading" style="border-bottom:2px solid #0073aa;font-size:25px;margin-top:40px;">Objective </h2>
      <ul style="color:black;">
        <li class="txt" >To provide an opportunity for both to interact to each other and learn new skills</li>
        <li class="txt" >To invigorate and energize senior citizens</li>
        <li class="txt" >Give help to reduce the likelihood of depression in the elderly & reduce the isolation of older adults</li>
        <li class="txt" >introduce technology into the life a senior citizen</li>
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