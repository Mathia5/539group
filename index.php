<?php
  $fName = basename(__FILE__);
  $pageTitle = 'Career Prep Pro';
  include 'includes/header_template.php';
 ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <!--<ol class="carousel-indicators hidden-xs">-->
                        <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
                        <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                        <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                    <!--</ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="http://google.com" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide1.jpg" alt="">
                                <p class="slidercontent text-center">This is Link1</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://duckduckgo.com" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide2.jpg" alt="">
                                <p class="slidercontent text-center">This is Link2</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://bing.com" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide3.jpg" alt="">
                                <p class="slidercontent text-center">This is Link3</p>
                            </a>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">Career Prep Pro</h1>
                <hr class="tagline-divider">
                <h2>
                    <small>By
                        <strong>Yuan, Peter, Boxian, Mathias and Nishan</strong>
                    </small>
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Select
                    <strong>Track</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Beautiful boxes
                    <strong>to showcase your content</strong>
                </h2>
                <hr>
                <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<?php
    include 'includes/footer_template.php';
?>


