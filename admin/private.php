<?php

    require("common.php");

    if(empty($_SESSION['user']))
    {
        header("Location: login.php");

        die("Redirecting to login.php");
    }

?>
Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, secret content!<br />
<a href="memberlist.php">Memberlist</a><br />
<a href="logout.php">Logout</a>