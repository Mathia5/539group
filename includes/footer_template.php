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

    <div id="flipsticky"><span>Feedback</span></div>
    <div id="panelsticky">
        <iframe frameborder=0 height=500 width=500 src="contact/index.html"></iframe>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo BASE_URL; ?>/assets/js/jquery-1.11.0.js"></script>

    <script src="<?php echo BASE_URL; ?>/assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo BASE_URL; ?>/assets/js/jquery.flip.min.js"></script>

    <?php if($fName == 'form.php') { ?>
    <script src="<?php echo BASE_URL; ?>/assets/js/inputvalidate.js" type="text/javascript"></script>

    <script src="<?php echo BASE_URL; ?>/assets/js/lib.js" type="text/javascript"></script>
    <?php } ?>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $(".card").flip({
      axis: 'y',
      trigger: 'hover'
    });

    $("#flipsticky").click(function () {

        // Set the effect type
        var effect = 'slide';

        // Set the options for the effect type chosen
        var options = { direction: 'left' };

        // Set the duration (default: 400 milliseconds)
        var duration = 500;

        $('#panelsticky').toggle(effect, options, duration);
    });

    </script>

</body>

</html>