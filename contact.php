<?php
  $fName = basename(__FILE__);
  $pageTitle = 'Contact';
  include 'includes/header_template.php';
 ?>

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>Career Prep</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-8">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width="600" height="400" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <div class="col-md-4">
                <p>Phone:
                    <strong>(734) 764-0206</strong>
                </p>
                <p>Email:
                    <strong><a href="mailto:SI539Winter15@umich.com">SI539Winter15@umich.edu</a></strong>
                </p>
                <p>Address:<br>
                    <strong>North Quadrangle<br> 105 S State St<br> Ann Arbor, MI, 48109</strong>

                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/mathias.jpg" alt="Mathias">
                    <h3>Mathias Arkayin
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/nishan.jpg" alt="Nishan">
                    <h3>Nishan Bose
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/yuan.jpg" alt="Yuan">
                    <h3>Yuan Chen
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/peter.jpg" alt="Peter">
                    <h3>Peter Vlahakis
                    </h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/boxian.jpg" alt="Boxian">
                    <h3>Boxian Wei
                    </h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

<!--     <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Contact
                    <strong>form</strong>
                </h2>
                <hr>
                <p>Your feedback is important to us!<br> Feel free to leave us a message with your suggestions and considerations!</p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

</div>
<!-- /.container -->

<?php
    include 'includes/footer_template.php'
?>
