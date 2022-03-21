<?php include "layouts/header.php"; ?>
<style>


  .team-social {
    position: absolute;
    left:-170% !important;
    top:35% !important;
    transition:all linear 0.3s;
  }


  .team-item:hover .team-social {
    left: -95% !important;
  }


  @media (max-width:325px) {
    
    .row {
      justify-content: center !important;
    }


    .photo {
      height: 300px !important;
      width: 300px !important;
    }


  .top_tech {
    margin-left:110px !important;
    margin-top:2px !important;
    font-size: 15px !important;
  }


  .top_volunteer {
    margin-left:110px !important;
    margin-top:2px !important;
    font-size: 15px !important;
  }


  }

  @media (min-width:326px) and (max-width:376px) {

    .row {
      justify-content: center !important;
    }


    .photo {
      height: 300px !important;
      width: 300px !important;
    }

    
    .top_tech {
      margin-left:132px !important;
      margin-top:2px !important;
      font-size: 18px !important;
    }


    .top_volunteer {
      margin-left:132px !important;
      margin-top:2px !important;
      font-size: 18px !important;
    }

  
    }



  @media (min-width:378px) and (max-width:500px) {
    .row {
      justify-content: center !important;
    }

    .photo {
      height: 300px !important;
      width: 300px !important;
    }

    .top_tech {
      margin-left:160px !important;
      margin-top:2px !important;
      font-size: 20px !important;
    }


    .top_volunteer {
      margin-left:150px !important;
      margin-top:2px !important;
      font-size: 20px !important;
    }


  }

  @media (min-width:510px) and (max-width:768px) {
    .row {
      justify-content: center !important;
    }

    .photo {
      height: 270px !important;
      width: 270px !important;
    }

    .top_tech {
      margin-left:272px !important;
      margin-top:7px !important;
      font-size: 30px !important;
    }


    .top_volunteer {
      margin-left:275px !important;
      margin-top:7px !important;
      font-size: 30px !important;
    }


  }

  @media (min-width:770px) and (max-width:1024px) {
    .row {
      justify-content: center !important;
    }

    .photo {
      height: 392px !important;

    }

    .top_tech {
      margin-left:380px !important;
      margin-top:8px !important;
      font-size: 40px !important;
    }


    .top_volunteer {
      margin-left:380px !important;
      margin-top:8px !important;
      font-size: 40px !important;
    }


  }

  @media (min-width:1025px) and (max-width:1440px) {
    .row {
      justify-content: center !important;
    }

    .photo {
      height: 239px !important;

    }


    .top_tech {
    margin-left:540px !important;
    margin-top:23px !important;
  }

  .top_volunteer {
    margin-left:550px !important;
    margin-top:20px !important;
  }

  }

  @media (min-width:1450px) {
    .row {
      justify-content: center !important;
    }

    .photo {
      height: 245px !important;

    }

    .top_tech {
    margin-left:540px !important;
    margin-top:23px !important;
  }


  .top_volunteer {
    margin-left:540px !important;
    margin-top:20px !important;
  }



  }


  

</style>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Team</h2>
            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
              <div class="breadcrumbs">
                <span><a href="index.php" rel="home">Home</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Pages</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="active">Team</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: Team -->
  <section>
    <div class="container pb-70">
      <div class="section-content">
        <div class="row">
          <div style="justify-content:center;">
            <h3 class="top_volunteer" style="font-size:46px;color:#fff;position:absolute;margin-left:580px;margin-top:20px;">Admin Team</h3>
            <img class="w-100 mb-60" src="images/aaa1.png" alt="">
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team14.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=25074"><h4 class="team-name mt-0 mb-0">Simran Sharma</h4></a>
                  <p class="designation">Country Coordinator</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team1.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=25074"><h4 class="team-name mt-0 mb-0">Adanne Mary</h4></a>
                  <p class="designation ">Country Coordinator</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team14.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=25074"><h4 class="team-name mt-0 mb-0">Esther Ugwu</h4></a>
                  <p class="designation ">Country Coordinator</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team4.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=35433"><h4 class="team-name mt-0 mb-0">Garima Mishra</h4></a>
                  <p class="designation">Young Leader, E-Sessions Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team2.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=26682"><h4 class="team-name mt-0 mb-0">Rishika Chowdhury</h4></a>
                  <p class="designation ">Webinar and Workshop Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team2.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=26682"><h4 class="team-name mt-0 mb-0">Riddhi Jaiswal</h4></a>
                  <p class="designation ">Webinar and Workshop Manager</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team3.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=47531"><h4 class="team-name mt-0 mb-0">Anmol Goyal</h4></a>
                  <p class="designation ">Management Trainee</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team9.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=48376"><h4 class="team-name mt-0 mb-0">Simran Mohanty</h4></a>
                  <p class="designation ">Social Media Marketing trainee</p>
                </div>
              </div>
            </div>
          </div>
          <div style="justify-content:center;">
            <h3 class="top_volunteer" style="font-size:46px;color:#fff;position:absolute;margin-left:580px;margin-top:20px;">Volunteers</h3>
            <img class="w-100 mb-60" src="images/aaa1.png" alt="">
          </div>
          
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team10.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=47773"><h4 class="team-name mt-0 mb-0">Avya Khurana</h4></a>
                  <p class="designation ">Social Media Marketing trainee</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team11.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=48628"><h4 class="team-name mt-0 mb-0">Swaraj Kully</h4></a>
                  <p class="designation ">General Management Trainee</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team8.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=48390"><h4 class="team-name mt-0 mb-0">Megha Singha</h4></a>
                  <p class="designation ">Social Media Marketing trainee</p>
                </div>
              </div>
            </div>
          </div>
          <div style="justify-content:center;">
            <h3 class="top_tech" style="font-size:45px;color:#fff;position:absolute;margin-left:570px;margin-top:20px;">Tech Team</h3>
            <img class="w-100 mb-60" src="images/aaa1.png" alt="">
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team12.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                  <h4 class="team-name mt-0 mb-0">Aniket Singh</h4>
                  <p class="designation ">Web Developer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team13.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=48408"><h4 class="team-name mt-0 mb-0">Chhayank Singh</h4></a>
                  <p class="designation ">Web Developer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-11 d-flex align-items-stretch">
            <div class="team-item mb-100" style="overflow:hidden;">
              <div class="team-thumb">
                <img class="w-100" src="images/team/team14.jpg" alt="">
                <div class="team-social">
                  <ul class="styled-icons icon-dark icon-rounded clearfix">
                    <li style="margin-bottom:10px;" ><a class="social-link" href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <br>
                    <li><a class="social-link" href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="team-content">
                <div class="team-information">
                <a href = "user.php?id=48368"><h4 class="team-name mt-0 mb-0">Shivvardhan Singh</h4></a>
                  <p class="designation ">Web Developer</p>
                </div>
              </div>
            </div>
          </div>
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