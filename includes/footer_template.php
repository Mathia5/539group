    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php
                    echo "Last changed on: " . date("F d Y H:i:s.", fileatime($fName));
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo BASE_URL; ?>/assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>

    <?php if($fName == 'form.php') { ?>
    <script src="<?php echo BASE_URL; ?>/assets/js/inputvalidate.js" type="text/javascript"></script>

    <script src="<?php echo BASE_URL; ?>/assets/js/lib.js" type="text/javascript"></script>
    <?php } ?>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>