<?php include "layouts/header.php"; ?>
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
                <span><a href="#" rel="home">Home</a></span>
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
    var users = JSON.parse(localStorage.getItem('users'));
    let currentUser = {};
    let data1 = "";
    try 
    {
    data.map((values) => {
      currentUser = _.find(users,u => {
					return u.u_id == values.u_id
				});

      data1 = `
        <div class="section-content">
        <div class="col-lg-9">
          <div class="img" >
          <img alt="images" style="height:400px !important; width:800px !important" src=${'https://adore.ivdata.in/data/act_data/' + values.photo_1} />
          </div>
          <h2 style = "margin-top:40px;"><a href = "User.php">${currentUser.f_name+ " " + currentUser.l_name}</a></h2>
					<p>${currentUser.city}</p>
          <h3 class="mt-20 mb-10">${values.type}</h3>
          <span class="text-theme-colored1 font-weight-600">Report</span>
          <p>${values.report}</p>
          <p> <span class="text-theme-colored1 font-weight-600">Impact</span> </p>
          <p>${values.impact}</p>
        </div>
      </div>`
    });
    } catch(err){
			console.log(currentUser , err);
		}

    document.getElementById("detail").innerHTML = data1;
  }).catch((error) => {
    console.log(error);
  });
</script>
<script src="js/custom.js"></script>

</body>

</html>