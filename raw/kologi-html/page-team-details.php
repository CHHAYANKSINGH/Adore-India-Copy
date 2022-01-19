<?php include "layouts/header.php"; ?>
<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: page title -->
  <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">Team Details</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="#"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item"><a href="#"><span>Pages</span></a></span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end"><span>Team Details</span></span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: Team Details -->
  <section>
    <div class="container pb-60">
      <div class="section-content">
        <div class="row">
          <div class="col-lg-3">
            <div class="sidebar">
              <div class="widget widget_text text-center">
                <img src="images/team/tm.jpg" class="img-fullwidth" alt="" />
              </div>
              <div class="widget widget_text text-center">
                <div class="textwidget">
                  <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40"> <img class="size-full wp-image-800 aligncenter" src="images/headphone-128.png" alt="" width="128" height="128" />
                    <h4>Online Help!</h4>
                    <h5>+(123) 456-78-90</h5>
                  </div>
                </div>
              </div>
              <div class="widget p-30 bg-white-fa">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Quick Contact!</h4>
                <form id="quick_contact_form1" name="footer_quick_contact_form" class="quick-contact-form" action="https://html.thememascot.net/2020/charity/kologi/kologi-html/includes/quickcontact.php" method="post">
                  <div class="mb-3">
                    <input name="form_email" class="form-control" type="text" placeholder="Enter Email">
                  </div>
                  <div class="mb-3">
                    <textarea name="form_message" class="form-control" required placeholder="Enter Message" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-theme-colored1 btn-round" data-loading-text="Please wait...">Send Message</button>
                  </div>
                </form>

                <!-- Quick Contact Form Validation-->
                <script>
                  (function($) {
                    $("#quick_contact_form1").validate({
                      submitHandler: function(form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                          dataType: 'json',
                          success: function(data) {
                            if (data.status === 'true') {
                              $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function() {
                              $(form_result_div).fadeOut('slow')
                            }, 6000);
                          }
                        });
                      }
                    });
                  })(jQuery);
                </script>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <h3 class="mt-0">Albert Rose<small class="text-muted" data-tm-font-size="1.2rem">/ Volunteer</small></h3>
            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
            <h5>Porta tellus aliquam ligula sollicitudin</h5>
            <p>Ultrices conubia vehicula malesuada. Eros commodo a duis accumsan vestibulum adipiscing hendrerit lobortis viverra non justo semper semper rutrum ad risus felis eros. Cursus libero viverra tempus netus diam vestibulum Semper est cursus viverra senectus lectus feugiat id! Odio porta nibh in vitae dictumst?</p>
            <div class="row mb-30">
              <div class="col-md-6">
                <h4 class="mb-30">Experiences</h4>
                <div class="tm-sc tm-timeline timeline-basic">
                  <div class="info-box">
                    <h5 class="title">WordPress Expert</h5>
                    <div class="subtitle">New Ideas Company</div>
                    <div class="time">Sep 2014 - Jan 2017</div>
                    <div class="content">
                      <p><span>Development and maintenance of a network of WordPress</span></p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Graphic and Web Designer</h5>
                    <div class="subtitle">Web Media Belgrade, Serbia</div>
                    <div class="time">Mar 2018 - Present</div>
                    <div class="content">
                      <p><span>Website maintenance and administration, design, development, WordPress</span></p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">WordPress Expert</h5>
                    <div class="subtitle">New Ideas Company</div>
                    <div class="time">Sep 2014 - Jan 2017</div>
                    <div class="content"> Project management, extending team, manage QA and actively take part in planning</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h4 class="mb-30">Education</h4>
                <div class="tm-sc tm-timeline timeline-basic">
                  <div class="info-box">
                    <h5 class="title">University of Belgrade</h5>
                    <div class="subtitle">Master's degree - Macroeconomics</div>
                    <div class="time">2012 - 2013</div>
                    <div class="content">
                      <p>Activities and Societies: Sport club Economist</p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Faculty of economics, Belgrade Graphic</h5>
                    <div class="subtitle">Master's degreeEconomic analisys and politics</div>
                    <div class="time">2005 - 2013</div>
                    <div class="content">
                      <p>Activities and Societies: Sport club Economist,volleyball player</p>
                    </div>
                  </div>
                  <div class="info-box">
                    <h5 class="title">Faculty of Mathematics</h5>
                    <div class="subtitle">Information Technology</div>
                    <div class="time">2006 - 2008</div>
                    <div class="content">
                      <p>Member of volleyball team, sport club Economist, Faculty of Economics, Belgrade, Serbia</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h5>Tincidunt wisi euismod iaculis nunc vita</h5>
            <p>Nostra dapibus varius et semper semper rutrum ad risus felis eros. Cursus libero viverra tempus netus diam vestibulum lorem tincidunt congue porta. Non ligula egestas commodo massa. Lorem non sit vivamus convallis elit mollis. Viverra sodales feugiat natoque sem morbi hac nunc ultricies nibh netus facilisis blandit.</p>
            <h5>Parturient tortor tortor sed tellus molestie neque</h5>
            <p>Habitasse justo, sed justo. Senectus morbi, fermentum magna id tortor. Lacinia sociis morbi erat ultricies dictumst condimentum dictum nascetur? Vitae litora erat penatibus nam lorem. Euismod tempus, mollis leo tempus? Semper est cursus viverra senectus lectus feugiat id! Odio porta nibh.</p>
            <div class="tm-sc-unordered-list list-style2 mb-30">
              <ul>
                <li>Lorem ipsum dolor sit amet adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
                <li>Habitant aliquam taciti tellus leo class.</li>
              </ul>
            </div>
            <p>Tincidunt habitant egestas erat lectus congue nisl dapibus nostra bibendum. In est in vitae dictumst varius lorem congue rutrum eget primis augue. At orci cubilia duis orci consequat libero malesuada mi. Porta facilisis dui, justo laoreet penatibus. Eros penatibus justo, tempor ligula vestibulum vestibulum lacus.</p>
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