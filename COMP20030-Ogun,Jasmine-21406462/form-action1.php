<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<title>Contacts- LUTE-LEGEND</title>

<body>
    
    <?php include 'navigation.php' ?>
    
    <div class="contact-action">
    <?php
    echo "<br>";

    $value3 = $_GET['prices'];
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $region = $_GET['region'];

    if ($value3 == 'package1'){
        $price = "€3/ group lesson";
    }
    else if ($value3 == 'package2'){
        $price = "€15/ 1-1 lesson";
    }
    else if ($value3 == 'package2'){
        $price = "€9.99/ month";
    }
    else if ($value3 == 'package3'){
        $price = "€95/ year";
    }
    
        echo "You chose this package: $price <br><br>";
        echo "The details you entered are as follows:<br>";
        echo "First Name: $fname <br>";
        echo "Last Name: $lname <br>";
        echo "Region: $region <br><br>";
    ?>

    <a href="contacts.php"><button class="main-button">BACK TO CONTACTS PAGE</button></a>
    </div>
    <br>
<?php   include 'footer.php' ?>