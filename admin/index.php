<?php

    require("common.php");



    $submitted_username = '';

    if(!empty($_POST))
    {
        $query = "
            SELECT
                uid,
                username,
                password
            FROM users
            WHERE
                username = :username
        ";

        // The parameter values
        $query_params = array(
            ':username' => $_POST['username']
        );

        try
        {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex)
        {
            die("Failed to run query: " . $ex->getMessage());
        }

        $login_ok = false;

        $row = $stmt->fetch();

        if($row)
        {
            if($_POST['password'] === $row['password'])
            {
                $login_ok = true;
            }
        }

        if($login_ok)
        {
            unset($row['password']);

            $_SESSION['user'] = $row;

            header("Location: private.php");
            die("Redirecting to: private.php");
        }
        else
        {
            print("Login Failed.");
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
        }
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
                <h2 class="intro-text text-center">Login</strong>
                </h2>
                <hr>
            </div>

            <form action="index.php" method="post">
                Username:<br />
                <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
                <br /><br />
                Password:<br />
                <input type="password" name="password" value="" />
                <br /><br />
                <input type="submit" value="Login" />
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer_template.php'
?>