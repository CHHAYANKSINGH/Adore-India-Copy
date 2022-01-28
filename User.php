<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  body {
    background-color: rgb(228, 226, 226);
  }

  .sec {
    background-color: #fff;
    margin-left: 25px;
    margin-right: 25px;
    margin-top: 25px;
    margin-bottom: 25px;
    padding: 20px;
  }
</style>
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Users</h2>
            <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
              <div class="breadcrumbs">
                <span><a href="#" rel="home">Home</a></span>
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
    <div class="sec" id="user">

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
  fetch("https://api.adoreearth.org/users/?ukey=" + id).then((res) => {
    return res.json();
  }).then((data) => {
    console.log(data);
    var users = JSON.parse(localStorage.getItem('users'));
    let currentUser = {};
    let data1 = "";
    try {
      data.map((values) => {
        currentUser = _.find(users, u => {
          return u.u_id == values.u_id
        });

        data1 = `<h2 style="margin: 0; padding-bottom:10px;">${currentUser.f_name+ " " + currentUser.l_name}</h2>
      <h4 style="margin: 0; padding-bottom:5px;">AIN - ${currentUser.u_id}</h4>
      <div style="display: flex;">
        <div class="col-lg-4">
          <h6>Status : Dormant</h6>
          <h6>State : ${currentUser.state}</h6>
        </div>
        <div class="col-lg-4">
          <h6>City : ${currentUser.city}</h6>
          <h6>Organization : ADORE</h6>
        </div>
      </div>
      <table>
        <thead>
          <tr style="color: black;">
            <th>Activity ID</th>
            <th>Date</th>
            <th>Venue</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>${values.activity_id}</td>
            <td>14/01/2021</td>
            <td>New Horizon High School</td>
            <td>Progressive</td>
          </tr>
          <tr>
            <td>222878</td>
            <td>02/02/2021</td>
            <td>New Horizon High School</td>
            <td>Progressive</td>
          </tr>
          <tr>
            <td>222894</td>
            <td>14/01/2021</td>
            <td>Springwood High School</td>
            <td>Active</td>
          </tr>
        </tbody>
      </table>`
      });
    } catch (err) {
      console.log(currentUser, err);
    }

    document.getElementById("user").innerHTML = data1;
  }).catch((error) => {
    console.log(error);
  });
</script>
<script src="js/custom.js"></script>

</body>

</html>