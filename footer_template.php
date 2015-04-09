
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
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>