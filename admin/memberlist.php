<?php

    require("../includes/common.php");

    if(empty($_SESSION['user']))
    {
        header("Location: ../login.php");

        die("Redirecting to login.php");
    }

    $query = "
        SELECT
            signups_id,
            signup_email_address,
            signup_date,
            signup_firstname,
            signup_lastname,
            signup_phone,
            signup_street1,
            signup_street2,
            signup_city,
            signup_state,
            signup_zip,
            signup_country,
            signup_subs,
            signup_freq
        FROM signups
    ";

    try
    {
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    catch(PDOException $ex)
    {
        die("Failed to run query: " . $ex->getMessage());
    }

    $rows = $stmt->fetchAll();
$fName = basename(__FILE__);
    $pageTitle = 'Career Prep Pro';
    include '../includes/header_template.php';

?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Member List</strong>
                </h2>
                <hr>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr class="info">
                        <th>ID</th>
                        <th>Email Address</th>
                        <th>Signup Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip</th>
                        <th>Country</th>
                        <th>Subs Type</th>
                        <th>Subs Frequency</th>
                    </tr>
                    <?php foreach($rows as $row): ?>
                        <tr>
                            <td><?php echo $row['signups_id']; ?></td>
                            <td><?php echo htmlentities($row['signup_email_address'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_date'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_firstname'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_lastname'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_phone'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_street1'], ENT_QUOTES, 'UTF-8') . "<br />".
                            htmlentities($row['signup_street2'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_city'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_state'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_zip'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_country'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_subs'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlentities($row['signup_freq'], ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <a href="private.php">Go Back</a><br />

        </div>
    </div>
</div>

<?php
    include '../includes/footer_template.php'
?>