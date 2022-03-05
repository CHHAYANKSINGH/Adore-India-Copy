<?php include "layouts/header.php"; ?>
<style>

.fact {
    position: relative;
    width: 100%;
    padding: 45px 0;
}

.fact .col-6 {
    display: flex;
    align-items: flex-start;
}

.fact .fact-icon {
    position: relative;
    margin: 7px 15px 0 15px;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fact .fact-icon [class^="flaticon-"]::before {
    margin: 0;
    font-size: 60px;
    line-height: 60px;
    background-image: linear-gradient(#ffffff, #30C0F0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.fact .fact-right .fact-icon [class^="flaticon-"]::before {
    background-image: linear-gradient(#ffffff, #030f27);
}

.fact .fact-left,
.fact .fact-right {
    padding-top: 60px;
    padding-bottom: 60px;
}

.fact .fact-text h2 {
    font-size: 35px;
    font-weight: 700;
}

.fact .fact-text p {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
}

.fact .fact-left {
    color: #30C0F0;
    background: #030f27;
}

.fact .fact-right {
    color: #030f27;
    background: #30C0F0;
}

.fact .fact-left h2 {
    color: #30C0F0;
}



    </style>
<section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-90 pb-90">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title">About Us</h2>
                    <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                        <div class="breadcrumbs">
                            <span><a href="index.php" rel="home">Home</a></span>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span><a href="#">Pages</a></span>
                            <span><i class="fa fa-angle-right"></i></span>
                            <span class="active">About Us</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pt-0">
        <div class="section-content about-current-theme-style1">
            <div class="row" style="margin-top: 110px">
                <div class="col-lg-6">
                    <div class="about-image-layer1 rs-about-image-layer1">
                        <div class="about-thumb">
                            <img style="max-height:450px;filter:brightness(0.6)" src="images/4.png" alt="Image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pr-20 pl-20 pl-md--0 pr-md--0" data-tm-padding-top="55">
                        <div class="tm-sc-section-title section-title mb-50">
                            <div class="title-wrapper mb-0">

                                <h2 class="title">About Us</h2>
                                <p class="paragraph mb-0">
                                    ADORE is a global voluntary group of college students
                                    and professionals, who have come forward together to
                                    motivate the budding youth into taking positive
                                    action. Our volunteers are located all over the world.
                                     We DO NOT collect any funds for its work as all its associates work voluntarily. 
                                     The interactive sessions are on various subjects from Cleanliness to Soft skills, 
                                     from Career Orientation to Self-Development, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-floating-objects">
        <span class="floating-object-1" data-tm-bg-img="images/shape/about-01.png" data-tm-width="256" data-tm-height="349" data-tm-top="auto" data-tm-bottom="-8" data-tm-left="75" data-tm-opacity="1"></span>
        <span class="floating-object-2 tm-animation-floating" data-tm-bg-img="images/shape/about-02.png" data-tm-width="90" data-tm-height="80" data-tm-top="150" data-tm-bottom="auto" data-tm-left="180" data-tm-opacity="1"></span>
        <span class="floating-object-3" data-tm-bg-img="images/shape/about-03.png" data-tm-width="174" data-tm-height="258" data-tm-top="auto" data-tm-bottom="0" data-tm-right="100" data-tm-left="auto" data-tm-opacity="1"></span>
        <span class="floating-object-4 tm-animation-slide-horizontal" data-tm-bg-img="images/shape/about-04.png" data-tm-width="90" data-tm-height="80" data-tm-top="40%" data-tm-bottom="auto" data-tm-right="120" data-tm-left="auto" data-tm-opacity="1"></span>
    </div>
</section>
<div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">30</h2>
                                        <p>Volunteers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">20</h2>
                                        <p>Blogs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">100</h2>
                                        <p>Webinars</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">60</h2>
                                        <p>Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php include "layouts/footer.php" ?>
<script src="js/custom.js"></script>
</body>

</html>