<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title">Contact</h2>
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

  <!-- Divider: Contact -->
  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <div class="col-lg-4">
          <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-50 mb-50">
            <div class="icon-box-wrapper">
              <div class="icon-wrapper">
                <a class="icon icon-type-font-icon icon-dark icon-circled">
                  <i class="flaticon-contact-044-call-1"></i>
                </a>
              </div>
              <div class="icon-text">
                <h5 class="icon-box-title mt-0">Phone</h5>
                <div class="content">
                  <a href="tel:+917223859729">+91 79804 60134</a>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-50 mb-50">
            <div class="icon-box-wrapper">
              <div class="icon-wrapper">
                <a class="icon icon-type-font-icon icon-dark icon-circled">
                  <i class="flaticon-contact-043-email-1"></i>
                </a>
              </div>
              <div class="icon-text">
                <h5 class="icon-box-title mt-0">Email</h5>
                <div class="content">
                  <a href="mailto:contact@adoreearth.org">contact@adoreearth.org</a>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-50 mb-50">
            <div class="icon-box-wrapper">
              <div class="icon-wrapper">
                <a class="icon icon-type-font-icon icon-dark icon-circled">
                  <i class="flaticon-contact-025-world"></i>
                </a>
              </div>
              <div class="icon-text">
                <h5 class="icon-box-title mt-0">Address</h5>
                <div class="content">Kolkata, West Bengal 700046</div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <h2 class="mt-0 mb-0">Interested in discussing?</h2>
          <p class="font-size-20">Active & Ready to use Contact Form!</p>
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="https://html.thememascot.net/2020/charity/kologi/kologi-html/includes/sendmail.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label>Name <small>*</small></label>
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name" />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label>Email <small>*</small></label>
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label>Subject <small>*</small></label>
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject" />
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label>Phone</label>
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone" />
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label>Message</label>
              <textarea name="form_message" class="form-control required" rows="8" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-3">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">
                Send your message
              </button>
              <button type="reset" class="btn btn-theme-colored2 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">
                Reset
              </button>
            </div>
          </form>

          <!-- Contact Form Validation-->
          <script>
            (function($) {
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = "#form-result";
                  $(form_result_div).remove();
                  form_btn.before(
                    '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
                  );
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(
                    form_btn.prop("disabled", true).data("loading-text")
                  );
                  $(form).ajaxSubmit({
                    dataType: "json",
                    success: function(data) {
                      if (data.status == "true") {
                        $(form).find(".form-control").val("");
                      }
                      form_btn
                        .prop("disabled", false)
                        .html(form_btn_old_msg);
                      $(form_result_div)
                        .html(data.message)
                        .fadeIn("slow");
                      setTimeout(function() {
                        $(form_result_div).fadeOut("slow");
                      }, 6000);
                    },
                  });
                },
              });
            })(jQuery);
          </script>
        </div>
      </div>
    </div>
  </section>

  <!-- End Divider -->
</div>
<!-- end main-content -->
<!--Footer-->
<?php include "layouts/footer.php" ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
</body>

</html>