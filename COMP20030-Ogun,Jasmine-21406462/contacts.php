<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<title>Facts- LUTE-LEGEND</title>

<body style="text-align: center">
    <?php
        include 'navigation.php';
    ?>
    
<div class="contact-div">
    <h2 class="title-text" style="padding-top: 20px">Get in contact via our socials down below  <i class="fa fa-arrow-down" aria-hidden="true"></i></h2>

    <p class="subtitle-text">Sign up today to get your first lesson for free, then €5.99/month,<br>or choose a package below.</p>

    <form name="input" action="form-action1.php" class="contact-form" method="get">
        <input type="radio" id="package1" name="prices" value="package1" checked>
        <label for="package1">€3/ group lesson</label><br>

        <input type="radio" id="package2" name="prices" value="package2">
        <label for="package1">€15/ 1-1 lesson</label><br>

        <input type="radio" id="package3" name="prices" value="package3">
        <label for="package2">€9.99/ month</label><br>

        <input type="radio" id="package4" name="prices" value="package4">
        <label for="package3">€95/ year</label>
    <br><br>
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    <br><br>
        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
    <br><br>
        <label for="region">Region:</label><br>
        <select id="region" name="region">
            <option value="Africa">Africa</option>
            <option value="Americas">Americas</option>
            <option value="Asia Pacific">Asia Pacific</option>
            <option value="Europe">Europe</option>
            <option value="Middle East">Middle East</option>
            <option value="Other">Other</option>
        </select>
    <br><br>
        <label for="feedback">Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="8" cols="50" required></textarea>
    <br><br>
        <input type="submit" value="Submit" class="submit">
    </form>

    <br>

    <h3 class="main-text">Thank you for visiting our website! </h3>

</div>

    <?php include 'footer.php' ?>