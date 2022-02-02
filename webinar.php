<?php include "layouts/header.php"; ?>
<div class="main-content-area">
    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
        <div class="container pt-90 pb-90">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Webinars</h2>
                        <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                            <div class="breadcrumbs">
                                <span><a href="#" rel="home">Home</a></span>
                                <span><i class="fa fa-angle-right"></i></span>
                                <span><a href="#">Programs</a></span>
                                <span><i class="fa fa-angle-right"></i></span>
                                <span class="active">Webinars </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-tm-bg-color="#fff">
        <div class="container">
            <div class="row" id="webinar">
                <script>
                    // check if products are present in localstorage if not then fetch and set
                    if (localStorage.getItem("webinars") === null) {
                        fetch("https://api.adoreearth.org/webinars/").then((res) => {
                            return res.json();
                            // set this res.json in local storage
                        }).then((data) => {
                            // document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
                            // data = _.orderBy(data, ['timestamp'], ['desc']);
                            localStorage.setItem('webinars', JSON.stringify(data));
                            console.log(data)
                            let data1 = "";
                            try {
                                data.map((values) => {
                                    data1 += `<div class="col-md-6 col-lg-4" id="${values.webinars_id}">
                              <div class="blog-current-style1 mb-lg-30">
                                <article class="post">
                                  <div class="entry-header">
                                    <div class="post-thumb">
                                      <div class="post-thumb-inner">
                                        <div class="thumb" style="border-radius:15px 15px 0px 0px ;">
                                          <img class="w-100" src="images/blog/session1.jpeg" alt="Image" />
                                        </div>
                                        <div class="meta-date">${values.webinars_date}</div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="entry-content" style="border-radius:0px 0px 15px 15px;">
                                    <h6 class="entry-title mt-0">
                                      <p>${values.webname}</p>
                                      <p>Speaker: ${values.speaker_name}</p>
                                    </h6>
                                    <div class="post-btn-readmore">
                                      <a href="${values.webinars_invitation}" class="btn btn-plain-text-with-arrow">Register Now!</a>
                                    </div>
                                  </div>
                                </article>
                              </div>
                            </div>`
                                });

                            } catch (err) {
                                console.log(err);
                            }
                            document.getElementById("webinar").innerHTML = data1;
                            console.log(data);
                        }).catch((error) => {
                            console.log(error);
                        });
                    } else {
                        // document.getElementsByClassName("preloader-floating-circles")[0].style.display = "none";
                        localStorage.getItem('webinars')
                        data = JSON.parse(localStorage.getItem('webinars'));
                        let data1 = "";
                        try {
                            console.log(data);
                            data.map((values) => {
                                data1 += `<div class="col-md-6 col-lg-4" id="${values.webinars_id}">
                            <div class="blog-current-style1 mb-lg-30">
                              <article class="post">
                                <div class="entry-header">
                                  <div class="post-thumb">
                                    <div class="post-thumb-inner">
                                      <div class="thumb" style="border-radius:15px 15px 0px 0px ;">
                                        <img class="w-100" src="images/blog/session1.jpeg" alt="Image" />
                                      </div>
                                      <div class="meta-date">${values.webinars_date}</div>
                                    </div>
                                  </div>
                                </div>
                                <div class="entry-content" style="border-radius:0px 0px 15px 15px;">
                                  <h6 class="entry-title mt-0">
                                    <p>${values.webname}</p>
                                    </h6>
                                    <p>Speaker: ${values.speaker_name}</p>
                                  
                                  <div class="post-btn-readmore">
                                    <a href="${values.webinars_invitation}" class="btn btn-plain-text-with-arrow">Register Now!</a>
                                  </div>
                                </div>
                              </article>
                            </div>
                          </div>`


                            });
                        } catch (err) {
                            console.log(err);
                        }
                        document.getElementById("webinar").innerHTML = data1;
                        console.log(data);
                    }
                </script>
            </div>
        </div>
</div>
<div class="tm-floating-objects">
    <span class="floating-object-1" data-tm-bg-img="images/shape/blog-01.png" data-tm-width="185" data-tm-height="253" data-tm-top="auto" data-tm-bottom="-6" data-tm-left="75" data-tm-opacity="1"></span>
    <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/shape/blog-02.png" data-tm-width="90" data-tm-height="80" data-tm-top="440" data-tm-bottom="auto" data-tm-left="180" data-tm-opacity="1"></span>
    <span class="floating-object-3" data-tm-bg-img="images/shape/blog-03.png" data-tm-width="136" data-tm-height="201" data-tm-top="auto" data-tm-bottom="0" data-tm-right="100" data-tm-left="auto" data-tm-opacity="1"></span>
</div>
</section>
</div>
<?php include "layouts/footer.php" ?>
<script src="js/custom.js"></script>
</body>

</html>