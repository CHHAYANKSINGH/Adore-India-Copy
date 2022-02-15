<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: page title -->
  <!-- <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">News Details</h2>
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
  </section> -->
  <!-- Section: home End -->

  <!-- Section: Blog -->
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
      <div class="row">
        <div class="col-sm-9">
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0" id="detail">

            </article>
            <!-- <div class="comment-box mt-30">
              <h3>Leave a Comment</h3>
              <form role="form" id="comment-form">
                <div class="row">
                  <div class="col-12 pt-0 pb-0">
                    <div class="mb-3">
                      <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                      <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                    </div>
                    <div class="mb-3">
                      <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <textarea class="form-control" required name="contact_message2" id="contact_message2" placeholder="Enter Message" rows="7"></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="mb-3">
                      <button type="submit" class="btn btn-theme-colored1 btn-round m-0" data-loading-text="Please wait...">Send Your Comment</button>
                    </div>
                  </div>
                </div>
              </form>
            </div> -->
          </div>
        </div>
        <div class="col-lg-3 sidebar-area sidebar-right">
          <div class="widget widget_archive">
            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Archives</h4>
            <ul>
              <li><a href='#'>October 2021</a></li>
              <li><a href='#'>February 2021</a></li>
            </ul>
          </div>
          <div class="widget widget_tag_cloud">
            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Tags</h4>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">health</a>
              <a href="#" class="tag-cloud-link">medical</a>
              <a href="#" class="tag-cloud-link">news</a>
              <a href="#" class="tag-cloud-link">latest</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

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
  localStorage.getItem('blog')
  var data = JSON.parse(localStorage.getItem('blog'));
  console.log(data);
  for (let x in data) {
    if (data[x].blog_id == id) {
      var image = data[x].blog_image
      var title = data[x].blog_title
      var timestamp = data[x].blog_timestamp
      var creator = data[x].creator
      var content = data[x].blog_data
    }
  }
  data1 = `
        <div class="entry-header mb-30">
                <div class="post-thumb thumb"> <img src="${image}" onerror="this.onerror=null;this.src='images/POSI.jpg'" alt="images" class="img-responsive img-fullwidth"> </div>
                <h3 class="mt-30">${title}</h3>
                <div class="entry-meta mt-0">
                  <span class="mb-10 text-gray mr-10"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i>${timestamp}</span>
                  <span class="mb-10 text-gray mr-10"><i class="far fa-user mr-10 text-theme-colored1"></i>${creator}</span>
                </div>
              </div>
              <div class="entry-content">
                <h5>${content}</h5>
              </div>`

  document.getElementById("detail").innerHTML = data1;
</script>
<script src="js/custom.js"></script>

</body>

</html>