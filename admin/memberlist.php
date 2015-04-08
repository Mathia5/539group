<?php

    require("common.php");

    if(empty($_SESSION['user']))
    {
        header("Location: login.php");

        die("Redirecting to login.php");
    }


    $query = "
        SELECT
            uid,
            username
        FROM users
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
?>
<h1>Memberlist</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>
    <?php foreach($rows as $row): ?>
        <tr>
            <td><?php echo $row['uid']; ?></td>
            <td><?php echo htmlentities($row['username'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="private.php">Go Back</a><br />