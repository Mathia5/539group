<?php

$host   = "localhost";
$dbname = "careerprep";
$user   = "root";
$pass   = "root";

$email = filter_var($_POST['confirm-email'], FILTER_SANITIZE_EMAIL);
$datetime = date('Y-m-d H:i:s');
$firstname = stripslashes(trim($_POST['firstname']));
$lastname = stripslashes(trim($_POST['lastname']));
$phone = stripslashes(trim($_POST['phone']));
$street1 = stripslashes(trim($_POST['street1']));
$street2 = stripslashes(trim($_POST['street2']));
$city = stripslashes(trim($_POST['city']));
$state = stripslashes(trim($_POST['state']));
$zip = stripslashes(trim($_POST['zip']));
$country = stripslashes(trim($_POST['country']));
$cardtype = stripslashes(trim($_POST['cardtype']));
$cardnumber = stripslashes(trim($_POST['cardnumber']));
$cardname = stripslashes(trim($_POST['cardname']));
$cardexpiry = stripslashes(trim($_POST['cardexpiry']));
$subs = stripslashes(trim($_POST['subs']));
$freq = stripslashes(trim($_POST['freq']));

$subject = 'You have successfully subscribed to CareerPrep';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    if (empty($email)) {
        $status = "error";
        $message = "The email address field must not be blank";
    } else if (!preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email)) {
        $status = "error";
        $message = "You must fill the field with a valid email address";
    } else {
        $existingSignup = $db->prepare("SELECT COUNT(*) FROM signups WHERE signup_email_address='$email'");
        $existingSignup->execute();
        $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

        if (!$data_exists) {
            $sql = "INSERT INTO signups (signup_email_address, signup_date, signup_firstname, signup_lastname, signup_phone, signup_street1, signup_street2, signup_city, signup_state, signup_zip, signup_country, signup_cardtype, signup_cardnumber, signup_cardname, signup_cardexpiry, signup_subs, signup_freq ) VALUES
(:email, :datetime, :firstname, :lastname, :phone, :street1, :street2, :city, :state, :zip, :country, :cardtype, :cardnumber, :cardname, :cardexpiry, :subs, :freq)";
            $q = $db->prepare($sql);
            $q->execute(
                array(
                    ':email' => $email,
                    ':datetime' => $datetime,
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':phone' => $phone,
                    ':street1' => $street1,
                    ':street2' => $street2,
                    ':city' => $city,
                    ':state' => $state,
                    ':zip' => $zip,
                    ':country' => $country,
                    ':cardtype' => $cardtype,
                    ':cardnumber' => $cardnumber,
                    ':cardname' => $cardname,
                    ':cardexpiry' => $cardexpiry,
                    ':subs' => $subs,
                    ':freq' => $freq
            ));

            if ($q) {

                $sender = 'Career Prep';
                $emailFrom = 'umsi@umich.edu';

                $headers  = 'MIME-Version: 1.1' . PHP_EOL;
                $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
                $headers .= "From: $sender <$emailFrom>" . PHP_EOL;
                $headers .= "Return-Path: $emailFrom" . PHP_EOL;
                $headers .= "Reply-To: $emailFrom" . PHP_EOL;
                $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

                $body = 'Name:' . $firstname . ' ' . $lastname . '<br>';
                $body .= 'Registered Email:' . $email;

                mail($email, $subject, $body, $headers);

                $status = "success";
                $message = "You have been successfully subscribed";

            } else {
                $status = "error";
                $message = "An error occurred, please try again (php)";
            }
        } else {
            $status = "error";
            $message = "This email is already subscribed";
        }
    }

    $data = array(
        'status' => $status,
        'message' => $message,
    );

    echo json_encode($data);

    $db = null;
}
    catch(PDOException $e) {
    echo $e->getMessage();
}
