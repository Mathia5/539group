<?php

    require("common.php");

    if(empty($_SESSION['user']))
    {
        header("Location: index.php");

        die("Redirecting to index.php");
    }

    $fName = basename(__FILE__);
    $pageTitle = 'Career Prep Pro';
    include 'header_template.php';

?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Private Area</strong>
                </h2>
                <hr>
            </div>

            Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br />
            <a href="memberlist.php">Memberlist</a><br />
            <a href="logout.php">Logout</a>

        </div>
    </div>
</div>

<?php
    include 'footer_template.php'
?>