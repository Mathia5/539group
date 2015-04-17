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
                            <a href="https://www.themuse.com/advice/the-absolute-best-questions-to-ask-at-your-interview" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide1.jpg" alt="Best questions to ask in an interview">
                                <p class="slidercontent text-center">The Absolute Best Questions to Ask at Your Interview</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://www.huffingtonpost.com/mattan-griffel/email-etiquette_b_4849649.html" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide2.jpg" alt="Getting a busy person to respond to an email">
                                <p class="slidercontent text-center">How to Get a Busy Person to Respond to Your Email</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="https://medium.com/@davefontenot/mgwu-getting-a-startup-job-internship-57c8762d6d81" target="_blank">
                                <img class="img-responsive img-full" src="assets/images/slide3.jpg" alt="Getting a startup job or internship">
                                <p class="slidercontent text-center">Getting a Startup Job/Internship</p>
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
                <h2 class="intro-text text-center">Topics
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/networking.jpg" alt="Networking">
                <h3>Networking
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/onlinebranding.jpg" alt="Online Branding">
                <h3>Online Branding
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/interviewing.jpg" alt="Interviewing">
                <h3>Interviewing

                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Your One-Stop Shop for Career Advice</h2>
                <hr>
                <p>Friends, family, career counselors, university workshops, magazines, Google searches -- it seems everyone is giving career advice everywhere nowadays. We are drowning in information overload, and much of that information is ineffective or repetitive.</p>
                <p>So stop searching for the best career advice. Let Career Prep Pro find the best content for you. Sign up for our email newsletter and receive daily, weekly, or monthly tips in your inbox.</p>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

<?php
    include 'includes/footer_template.php';
?>


