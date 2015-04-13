<?php

//$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
define('BASE_URL', 'http://localhost/SI539/proj/539group/');

//if (BASE_URL != $url) {
//
//    header("Location: install.php");
//
//    die("Redirecting to: install.php");
//
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico" />

    <title><?php 
            echo $pageTitle;
     ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/business-casual.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">
        <?php 
            echo $pageTitle;
         ?>
    </div>
    <div class="address-bar"> SI539 | Final Group Project | Winter 2015 </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Career Prep Pro</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li
                    <?php
                    if ($fName == "index.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>">Home</a>
                    </li>
                    <li
                    <?php
                    if ($fName == "content.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>/content.php">Content</a>
                    </li>
                    <li
                    <?php
                    if ($fName == "form.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>/form.php">Subscribe</a>
                    </li>
                     <li
                    <?php
                    if ($fName == "events.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>/events.php">Events</a>
                    </li>
                    <li
                    <?php
                    if ($fName == "login.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>/login.php">Admin</a>
                    </li>
                    <li
                    <?php
                    if ($fName == "contact.php"){
                        echo "class = \"active\"";
                    }
                    ?>
                    >
                        <a href="<?php echo BASE_URL; ?>/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>