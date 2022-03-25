<?php include "layouts/header.php"; ?>
<style>

.container1 {
	max-width: 1100px;
	margin: 50px 0px;
	overflow: auto;
    text-align: center;
}

.counters {
	background: #fff;
	color: black;
	padding: 40px 20px;
}

.counters .container1 {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-gap: 30px;
	text-align: center;
}

.counters i {
	color: black;
	margin-bottom: 5px;
}

.counters .counter {
	font-size: 45px;
	margin: 10px 50px;
}

@media (max-width: 700px) {
	.counters .container1 {
		grid-template-columns: repeat(1, 1fr);
	}

	.counters .container1 > div:nth-of-type(1),
	.counters .container1 > div:nth-of-type(2),
	.counters .container1 > div:nth-of-type(3) {
		border-bottom: 1px black solid;
		padding-bottom: 40px;
	}
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
    <div class="container pt-0 pb-0">
        <div class="section-content about-current-theme-style1">
            <div class="row" style="margin-top: 110px; margin-bottom: 10px !important; padding-bottom:10px !important;">
                <div class="col-lg-4" align="center" style="margin-top: 50px; margin-bottom: 80px;">
                    <div class="about-image-layer1 rs-about-image-layer1">
                        <div class="about-thumb">
                            <img style="max-height:450px;filter:brightness(0.6)" src="images/4.png" alt="Image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content pr-20 pl-60 pl-md--0 pr-md--0" data-tm-padding-top="5">
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
                                <p class="paragraph mb-0">
                                We aim to inspire the young generation to dedicate their time and channelize their ideas into some positive and productive action that improves their knowledge, polishes their skills, and enriches their thought processes.
We make sure students are encouraged and enthusiastic to take initiative and participate in all the community services.

                                </p>
                                <p class="paragraph mb-0">
                                Youth should feel responsible to contribute effectively towards the betterment of the society around them and we work together helping the youth improve their communication and managing skills and inculcating creativity and confidence.
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

<section class="counters">
			<div class="container1">
				<div>
					<i class="fa fa-group fa-4x"></i>
					<div class="counter" data-target="400">0</div>
					<h3>Youth</h3>
				</div>
                <div>
					<i class="fa fa-globe fa-4x"></i>
					<div class="counter" data-target="100">0</div>
					<h3>Countries</h3>
				</div>
				<div>
					<i class="fa fa-newspaper-o fa-4x"></i>
					<div class="counter" data-target="150">0</div>
					<h3>Activities</h3>
				</div>
				<div>
					<i class="fa fa-child fa-4x"></i>
					<div class="counter" data-target="300">0</div>
					<h3>Young Leaders</h3>
				</div>
			</div>
		</section>


<?php include "layouts/footer.php" ?>
<script src="js/custom.js"></script>

<script>
    const counters = document.querySelectorAll('.counter');
    const speed = 4000; // The lower the slower

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            // Lower inc to slow and higher to slow
            const inc = target / speed;

            // console.log(inc);
            // console.log(count);

            // Check if target is reached
            if (count < target) {
                // Add inc to count and output in counter
                counter.innerText = Math.ceil(count + inc);
                // Call function every ms
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
</script>
</body>

</html>