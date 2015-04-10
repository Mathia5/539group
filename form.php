<?php
    $fName = basename(__FILE__);
    $pageTitle = 'Career Prep Pro';
    include 'includes/header_template.php';
?>

<div class="container">
    <div class="row">
        <div class="box">
           <div class="col-lg-12 text-center">
                <h2>Newsletter Subscription Service
                    <br>
                    <small>Sign up to stay informed</small>
                </h2>
                <br>
            </div>

            <form action="includes/send.php" method="post" id="newsletter" name="newsletter">
                <p>Planning for your career involves staying current with the latest tricks and trends in job hunting, personal marketing, and interviewing.
                    Career Prep Pro provides a personalized newsletter subscription service to get you the most up-to-date information related to career planning. 
                    Please complete the form below to sign up for your personalized newsletter.</p>
                <fieldset id="details" onchange="yourDetailCheck(this)">
                    <legend class="top">Contact Information</legend>
                    <ol>
                        <li>
                            <label for="firstname">First Name</label>
                            <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" required autofocus>
                            <span id="CheckFirstName"></span>
                        </li>
                        <li>
                            <label for="lastname">Last Name</label>
                            <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" required autofocus>
                            <span id="CheckLastName"></span>
                        </li>
                        <li>
                            <label for="phone">Phone</label>
                            <input id="phone" name="phone" type="text" placeholder="Eg. 123-456-7890" class="form-control" required>
                            <span id="CheckPhone"></span>
                        </li>
                        <li>
                            <label for="birthdate">Birth Date</label>
                            <input id="birthdate" name="birthdate" type="date" class="form-control" required>
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email"  placeholder="example@domain.com" class="form-control" required>
                            <span id="CheckEmail"></span>
                        </li>
                        <li>
                            <label for="confirm-email">Confirm Email</label>
                            <input id="confirm-email" name="confirm-email" type="email"  placeholder="example@domain.com" class="form-control" required>
                            <span id="CheckEmailConfirm"></span>
                        </li>
                    </ol>
                </fieldset>
                <fieldset id="address">
                    <legend class="top">Delivery Address</legend>
                    <ol>
                        <li>
                            <label for="street1">Street Address 1</label>
                            <input type="text" id="street1" name="street1" placeholder="123 Main St" class="form-control">
                        </li>
                        <li>
                            <label for="street2">Street Address 2</label>
                            <input type="text" id="street2" name="street2" placeholder="Island Drive" class="form-control">
                        </li>
                        <li>
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" placeholder="Ann Arbor" class="form-control">
                        </li>
                        <li>
                            <label for="country">Country</label>
                            <input id="country" name="country" type="text" required placeholder="USA" class="form-control">
                        </li>
                        <li>
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="MI" class="form-control">
                        </li>
                        <li>
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="48105" class="form-control">
                        </li>
                    </ol>
                </fieldset>

                <fieldset id="payment">
                    <legend class="top">Payment Details</legend>
                    <ol>
                        <li>
                            <fieldset>
                                <legend class="bottom">Select Card Type</legend>
                                <ol>
                                    <li>
                                        <input id="visa" name="cardtype" type="radio" value="Visa" required>
                                        <label for="visa">VISA</label>
                                    </li>
                                    <li>
                                        <input id="amex" name="cardtype" type="radio" value="AmEx">
                                        <label for="amex">AmEx</label>
                                    </li>
                                    <li>
                                        <input id="mastercard" name="cardtype" type="radio" value="MasterCard">
                                        <label for="mastercard">Mastercard</label>
                                    </li>
                                </ol>
                            </fieldset>
                        </li>
                        <li>
                            <label for="cardnumber">Card Number</label>
                            <input id="cardnumber" name="cardnumber" type="text" required placeholder="0000-0000-0000-0000" class="form-control">
                        </li>
                        <li>
                            <label for="cardname">Name on Card</label>
                            <input id="cardname" name="cardname" type="text" placeholder="Name as appears on card." class="form-control" required>
                        </li>
                        <li>
                            <label for="cardexpiry">Expiration Date</label>
                            <input id="cardexpiry" name="cardexpiry" type="date" class="form-control" required>
                        </li>
                        <li>
                            <label for="cardcvv">CVV Number</label>
                            <input id="cardcvv" name="cardcvv" type="text" pattern="[0-9]{3}" placeholder="213" class="form-control" required>
                        </li>
                    </ol>
                </fieldset>

                <fieldset id="subscription">
                    <legend class="top">Newsletter Subscription Options</legend>
                    <ol>
                        <li>
                            <fieldset>
                                <legend class="bottom">Subscription Type</legend>
                                <ol class="substype">
                                    <li>
                                        <input id="subs1" name="subs" type="radio" value="Print" required>
                                        <label for="subs1">Print</label>
                                    </li>
                                    <li>
                                        <input id="subs2" name="subs" type="radio" value="Electronic">
                                        <label for="subs2">Electronic</label>
                                    </li>
                                    <li>
                                        <input id="subs3" name="subs" type="radio" value="PrintElectronic">
                                        <label for="subs3">Print + Electronic</label>
                                    </li>
                                </ol>
                            </fieldset>
                        </li>
                        <li>
                            <fieldset>
                                <legend class="bottom">Subscription Frequency</legend>
                                <ol class="substype">
                                    <li>
                                        <input id="freq1" name="freq" type="radio" value="Daily" required>
                                        <label for="freq1">Daily</label>
                                    </li>
                                    <li>
                                        <input id="freq2" name="freq" type="radio" value="Weekly">
                                        <label for="freq2">Weekly</label>
                                    </li>
                                    <li>
                                        <input id="freq3" name="freq" type="radio" value="Monthly">
                                        <label for="freq3">Monthly</label>
                                    </li>
                                    <li>
                                        <input id="freq4" name="freq" type="radio" value="Yearly">
                                        <label for="freq4">Yearly</label>
                                    </li>
                                </ol>
                            </fieldset>
                        </li>
                        <li>
                            <fieldset>
                                <legend class="bottom">Topics of Interest</legend>
                                <ol class="substype">
                                    <li>
                                        <input id="topic1" name="topic[]" type="checkbox" value="Networking">
                                        <label for="topic1">Networking</label>
                                    </li>
                                    <li>
                                        <input id="topic2" name="topic[]" type="checkbox" value="OnlineBranding" checked>
                                        <label for="topic2">Online Branding</label>
                                    </li>
                                    <li>
                                        <input id="topic3" name="topic[]" type="checkbox" value="Interviewing" checked>
                                        <label for="topic3">Interviewing</label>
                                    </li>
                                </ol>
                            </fieldset>
                        </li>
                    </ol>
                </fieldset>

                <input type="submit" value="Subscribe" name="signup-button" class="btn btn-default" id="button">

            </form>

            <div id="response"></div>
        </div>
    </div>
</div>

<?php
    include 'includes/footer_template.php'
?>