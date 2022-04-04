<?php include "layouts/header.php"; ?>
<!-- Preloader -->
<div id="loader"></div>
<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Activity Details</h2>
            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
              <div class="breadcrumbs">
                <span><a href="index.php" rel="home">Home</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span><a href="#">Pages</a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="active">Activity Details</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Campaign details -->
  <section>
    <div class="container" id="detail" align="center">
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
<script>
  var id = window.location.search.substr(4)
  fetch("https://api.adoreearth.org/activities/?akey=" + id).then((res) => {
    return res.json();
  }).then((data) => {
    console.log(data);
    document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
    var users = JSON.parse(localStorage.getItem('users'));
    let currentUser = {};
    let data1 = "";
    try {
      data.map((values) => {
        currentUser = _.find(users, u => {
          return u.u_id == values.u_id
        });

        data1 = `
        <div class="section-content">
        <div class="col-lg-9">
          <div class="img" >
          <img alt="images" style="height:600px !important; width:800px !important" src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1}  onerror="this.onerror=null;this.src='images/Null.jpeg'"  />
          </div>
          <h2 style = "margin-top:40px;"><a href = "User.php?id=${currentUser.u_id}">${currentUser.f_name+ " " + currentUser.l_name}</a> <span class="h3">(${currentUser.city})</span></h2>
          <h3 class="mt-20 mb-10">Center : ${values.type}</h3>
          <span style="font-size:35px" class="text-theme-colored1 font-weight-500">Report</span>
          <h5>${values.report}</h5>
          <span style="font-size:35px" class="text-theme-colored1 font-weight-500">Impact</span>
          <h5>${values.impact}</h5>
        </div>
      </div>`
      });
    } catch (err) {
      console.log(currentUser, err);
    }

    document.getElementById("detail").innerHTML = data1;
  }).catch((error) => {
    console.log(error);
  });
</script>
<script src="js/custom.js"></script>

<!-- <script>
  var loader = document.getElementById("loader");
  window.addEventListener("load", function(){
      loader.style.display = "none";
  })
</script> -->

</body>

</html>