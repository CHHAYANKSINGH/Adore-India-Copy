<!-- <footer id="footer" class="footer bg-img-center-bottom bg-img-cover" data-tm-bg-img="images/bg/bg03.jpg"> -->
<footer id="footer" class="footer bg-img-center-bottom bg-theme-colored4-darker5">
    <div class="footer-widget-area pt-60">
        <div class="container pb-40">
            <div class="row">
                <div class="col-md-12 col-lg-3" style="margin-top:60px;">
                    <div class="tm-widget-contact-info contact-info-style1" data-tm-margin-top="-22">
                        <!-- <div class="thumb" data-tm-margin-bottom="48">
                            <img alt="Logo" width="200" src="images/ADORE1.png" />
                        </div> -->
                        <ul class="mb-30">
                            <li class="contact-phone">
                                <div class="icon">
                                    <img src="images/icons/ic1.png" alt="Icon" />
                                </div>
                                <div class="text">
                                    <a href="tel:+91.722.3859.729">+91 79804 60134</a>
                                    <span>Contact Number</span>
                                </div>
                            </li>
                            <li class="contact-email">
                                <div class="icon">
                                    <img src="images/icons/ic2.png" alt="Icon" />
                                </div>
                                <div class="text">
                                    <a href="mailto:contact@adoreearth.org">contact@adoreearth.org</a>
                                    <span>Email</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget widget_nav_menu ml-25">
                        <h4 style="color:#77aaf7;" class="widget-title">Links</h4>
                        <div class="menu-footer-page-list">
                            <ul id="footer-page-list" class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="page-contact.php">Contact Us</a></li>
                                <li><a href="page-team-grid.php">About Us</a></li>
                                <li>
                                    <a href="webinar.php">Our Programs</a>
                                </li>
                                <li><a href="Activities.php">Our Activities</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h4 style="color:#77aaf7;" class="widget-title mb-20">Blogs</h4>
                        <div class="latest-posts pt-2" id="blogs">
                        <script>
                            //document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
                            localStorage.getItem('blog')
                            data = JSON.parse(localStorage.getItem('blog'));
                            // var users = JSON.parse(localStorage.getItem('users'));
                            // let currentUser = {};
                            let data1 = "";
                            try {
                              data.slice(0,3).map((values) => {
                                
                                let timestamp = values.blog_timestamp;
                                let date = timestamp.slice(0,10);
                    
                                data1 += `<article class="post clearfix pb-0 mb-30">
                                                                        <a class="post-thumb" href="page-blog-details.php?id=${values.blog_id}"><img src=${'https://adore.ivdata.in/data/act_data/' + values.blog_image} onerror="this.onerror=null;this.src='images/JM1.png'" alt="Image" class="w-100"></a>
                                                            <div class="post-right">
                                                                <div class="post-date">
                                                                    <span class="entry-date text-theme-colored1 pt-0 text-uppercase mb-10">${date}</span>
                                                                </div>
                                                                <p class="post-title m-0 p-0" style="text-align:left;">
                                                                    <a href="page-blog-details.php?id=${values.blog_id}">${values.blog_title}</a>
                                                                </p>
                                                            </div>
                                                            </article>`
                                
                                                          //  document.getElementById("blogs").innerHTML = data1;
                                
                                
                              });
                            } catch (err) {
                              console.log(err);
                            }
                            document.getElementById("blogs").innerHTML = data1;
  
                        </script>
                            <!-- <script>
                                localStorage.getItem('blog')
                                var data = JSON.parse(localStorage.getItem('blog'));

                                for (let x in data) {
                                    let id = data[x].blog_id
                                    let image = data[x].blog_image
                                    let title = data[x].blog_title
                                    let timestamp = data[x].blog_timestamp
                                    let date = timestamp.slice(0,10);
                                    let creator = data[x].creator
                                    let content = data[x].blog_data
                                    let i = 0
                                    let data1 = ""
                                    while (i < 3) {
                                        data1 += `<article class="post clearfix pb-0 mb-30">
                                                <a class="post-thumb" href="page-blog-details.php?id=${id}"><img src="images/POSI.jpg" alt="Image" /></a>
                                    <div class="post-right">
                                        <div class="post-date">
                                            <span class="entry-date text-theme-colored1 pt-0 text-uppercase mb-10">${date}</span>
                                        </div>
                                        <p class="post-title m-0 p-0" style="text-align:left;">
                                            <a href="page-blog-details.php?id=${id}">${title}</a>
                                        </p>
                                    </div>
                                    </article>`


                                        document.getElementById("blogs").innerHTML = data1;
                                        i++;
                                    }
                                }
                            </script> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="widget contact-info contact-info-style1">
                        <h4 style="color:#77aaf7;" class="widget-title mb-40">Newsletter</h4>
                        <p style="text-align:left;" class="description p-0 mb-40 font-size-15">
                        Sign up now to get ADORE monthly updates and news.

                        </p>

                        <!-- Mailchimp Subscription Form-->
                        <form id="mailchimp-subscription-form10"     class="newsletter-form cp-newsletter m-0 p-0">
                            <div class="input-group">
                                <input type="email" id="mce-EMAIL2" class="form-control text-theme-colored1 font-size-13 border-radius-50" placeholder="Email address" name="EMAIL" value="" data-tm-bg-color="white" data-tm-height="60px" />
                                <div class="input-group-append tm-sc tm-sc-button">
                                    <button type="submit" class="btn text-theme-colored1 btn-sm btn-flat border-0 box-shadow-none font-size-13" data-tm-bg-color="black" data-tm-height="60px">
                                        <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Mailchimp Subscription Form Validation-->
                        <script>
                            (function($) {
                                $("#mailchimp-subscription-form10").ajaxChimp({
                                    callback: mailChimpCallBack,
                                    url: "//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e",
                                });

                                function mailChimpCallBack(resp) {
                                    // Hide any previous response text
                                    var $mailchimpform = $(
                                            "#mailchimp-subscription-form10"
                                        ),
                                        $response = "";
                                    $mailchimpform.children(".alert").remove();
                                    if (resp.result === "success") {
                                        $response =
                                            '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            resp.msg +
                                            "</div>";
                                    } else if (resp.result === "error") {
                                        $response =
                                            '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                            resp.msg +
                                            "</div>";
                                    }
                                    $mailchimpform.prepend($response);
                                }
                            })(jQuery);
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="color:snow;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom-style1">
                            <div class="footer-paragraph font-size-15">
                                © Copyright Adoreearth.org
                            </div>
                            <div class="widget widget-social-list-custom clearfix mb-0">
                                <ul class="styled-icons icon-theme-colored1">
                                    <li>
                                        <a href="#" target="blank"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/adoreearth/" target="blank"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/adoretheearth/" target="blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCnmuSy5FJ64zojXAP2P3ttQ/featured" target="blank"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://in.linkedin.com/company/adore-earth" target="blank"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/AdoreEarth?t=kvxEaXb3QtcK41czb9itsA&s=08" target="blank"><i class="fab fa-twitter"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>