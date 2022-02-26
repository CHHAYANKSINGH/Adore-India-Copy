<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  body {
    background-color: #c2fcff;

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
    .sec {
      padding: 20px;
    }
    .poster {
      border: 2px solid #0073aa !important;
    }

    h2 {
      margin:0px !important;
      font-size:25px !important;
    }

    span {
      font-size:8px !important;
      font-weight:400 !important;
    }

    .shiv2 {
      display: block !important;
    }

    .ob {
      font-size:11px !important;
    }

    .par {
      padding: 5px !important;
    }

    .obj {
      font-size:9px !important;
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
            <h2 class="title">Young Leader</h2>
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
    <div style="border-radius: 4px;" class="sec col-lg-10 col-sm-10 col-10">
      <!-- <h2 align="center" style="margin: 0; margin-bottom:40px;font-size:80px;">Young <span style="color:#24a8e6;">Leaders</span></h2> -->
      <img class="poster" style="border-radius: 4px;border: 4px solid #0073aa" src="images/YL(1).jpeg" alt="image">
      <!-- <p class="h1" style=" padding-top:20px;border-bottom:2px solid #0073aa;font-size:45px;margin-top:40px;color:blue;">Objective </p> -->
      <h2 style=" padding-top:20px;border-bottom:2px solid #0073aa;font-size:45px;margin-top:40px;color:blue;">Objective </h2>
     <h6><span style="font-weight: 200;">To motivate students to engage themselves in self-development and socially responsible activities. These activities also help them inculcate and develop: Confidence, Creativity, Social Responsibility, Public Speaking and other Soft Skills.</span></h6>
      <h6 class="ob" style="margin-top: 40px;color:#cd8d00;">Some of the Young Leader Activities include :</h6>
      <div style="display: flex;">
        <div class="par col-lg-6 col-sm-6 col-6">
          <h6 class="obj">Thank our social Heroes : <span style="font-weight: 200;">Thank social heroes around you like a doctor, nurse, sweeper, or anyone who does something good for society through a gesture</span> </h6>
          <h6 class="obj">Better & Responsible student : <span style="font-weight: 200;">Self Analysis of own habits and change where necessary</span></h6>
          <h6 class="obj">Craft from waste : <span style="font-weight: 200;">Create useful crafts from waste/unused materials</span></h6>
          <h6 class="obj">Budding Talent : <span style="font-weight: 200;">a talent like music or song or dance</span></h6>
        </div>
        <div class="par col-lg-6 col-sm-6 col-6">
          <h6 class="obj">Creative Quest (CQ) : <span style="font-weight: 200;">It’s a depiction of our responsibility towards our society in an art form (drawing/painting/ drama/ video/ audio/ poem etc.)</span></h6>
          <h6 class="obj">Vision for improvement : <span style="font-weight: 200;">Student will make a list of goals and hobbies and start developing the skill required to achieve the goal.</span></h6>
          <h6 class="obj">Young Leader Speaks : <span style="font-weight: 200;">Speech on how we can make our society a better place or responsibility of youth or how we can have a positive attitude etc.</span></h6>
        </div>
      </div>
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