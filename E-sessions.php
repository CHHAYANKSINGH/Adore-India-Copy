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
      font-size:14px !important;
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
      font-size:14px !important;
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
            <h2 class="title">E-sessions</h2>
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
    <div class="sec col-lg-8 col-sm-10 col-10">
      <h2 class="heading" style="margin: 0; padding-bottom:10px;">E-<span class="heading" style="color:#24a8e6;">Sessions</span></h2>
      <h6><span class="txt" style="font-weight: 400;">Interaction and facilitation are two of the most important skills to conduct education and outreach sessions on various significant issues. Adore volunteers connect with children at schools and children’s homes to conduct interactive sessions on matters that they usually find difficult to understand or discuss with their parents and teachers. The interactions cater to learning outcomes in students at a knowledge-based, emotion-based and action-based level. The idea is to engage all students during the interactions and not just the extrovert few.

          <h6 class="txt"><span class="txt" style="font-weight: 400;">These sessions are around various important topics like</span> Child Safety, How to Overcome Fear, General Awareness, Public Speaking Sessions, Career Choice, Managing Peer Pressure, Health and Hygiene, Respecting Elders, Teenage Issues, Personality Development and many more.</h6>
          We familiarize the students with some of the crucial topics by discussing and enticing them with engaging and challenging discussion questions which creates essential classroom learning opportunities.
        </span></h6>
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