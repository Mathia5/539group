<?php

$host   = "localhost";
$dbname = "icc_feedback";
$user   = "root";
$pass   = "root";

$email    = filter_var($_POST['fd-email'], FILTER_SANITIZE_EMAIL);
$datetime = date('Y-m-d H:i:s');
$category = stripslashes(trim($_POST['fd-category']));
$subject = stripslashes(trim($_POST['fd-subject']));
$feedback = stripslashes(trim($_POST['fd-feedback']));

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if (empty($email)) {
        $status = "error";
        $message = "The email address field must not be blank";
    } else if (!preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email)) {
        $status = "error";
        $message = "You must fill the field with a valid email address";
    } else {

        $sql = "INSERT INTO feedback (feedback_email_address, feedback_date, feedback_category, feedback_subject, feedback_feedback) VALUES (:email, :datetime, :category, :subject, :feedback)";
        $q = $db->prepare($sql);
        $q->execute(
            array(
                ':email' => $email,
                ':datetime' => $datetime,
                ':category' => $category,
                ':subject' => $subject,
                ':feedback' => $feedback
        ));

        $status = "success";
        $message = "Thank you for submitting your feedback. We will be in touch soon.";

    }

    $data = array(
        'status' => $status,
        'message' => $message
    );

    echo json_encode($data);

    $db = null;
}
    catch(PDOException $e) {
    echo $e->getMessage();
}
