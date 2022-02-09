<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  body {
    background-color: #0073aa;

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
  <section>
    <div class="sec col-lg-7">
      <h2 style="margin: 0; padding-bottom:10px;">Wise<span style="color:#24a8e6;">Talk</span></h2>
      <h6><span style="font-weight: 200;">WiseTalk provides a platform to gather knowledge and experiences which can provide an immense help to the younger generations with the help of experience of senior citizens.
          Through these fun learning sessions, we interact and make new friends.
      </h6>
      <h2 style="border-bottom:2px solid #0073aa;font-size:25px;">Objective </h2>
      <ul style="color:black;">
        <li>To provide an opportunity for both to interact to each other and learn new skills</li>
        <li>To invigorate and energize senior citizens</li>
        <li>Give help to reduce the likelihood of depression in the elderly & reduce the isolation of older adults</li>
        <li>introduce technology into the life a senior citizen</li>
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