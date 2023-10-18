<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<title>Songs- LUTE-LEGEND</title>
<body>
    
<?php include 'navigation.php'; ?>

<br>
<div style="text-align: center">

<?php
$value1 = $_GET['skill-level'];
$value2 = $_GET['age'];

    if($value1 == "beginner" && $value2 == "age1") {
        // echo "beginner 10-25";
        echo "<img class='resources-image' src='Content/what-a-ww.jpg'>";
    }
    else if ($value1 == "intermediate" && $value2 == "age1"){
        // echo "intermediate 10-25";
        echo "<img class='resources-image' src='Content/what-a-ww.jpg'>";
    }
    else if($value1 == "advanced" && $value2 == "age1"){
        // echo "advanced 10-25";
        echo "<img class='resources-image' src='Content/what-a-ww.jpg'>";
    }
    else if($value1 == "beginner" && $value2 == "age2") {
        // echo "beginner 25-40";
        echo "<img class='resources-image' src='Content/just-give-mar.jpg'>";
    }
    else if ($value1 == "intermediate" && $value2 == "age2"){
        // echo "intermediate 25-40";
        echo "<img class='resources-image' src='Content/just-give-mar.jpg'>";
    }
    else if($value1 == "advanced" && $value2 == "age2"){
        // echo "advanced 25-40";
        echo "<img class='resources-image' src='Content/just-give-mar.jpg'>";
    }
    else if($value1 == "beginner" && $value2 == "age3") {
        // echo "beginner 40-60";
        echo "<img class='resources-image' src='Content/easy.jpg'>";
    }
    else if ($value1 == "intermediate" && $value2 == "age3"){
        // echo "intermediate 40-60";
        echo "<img class='resources-image' src='Content/easy.jpg'>";
    }
    else if($value1 == "advanced" && $value2 == "age3"){
        // echo "advanced 40-60";
        echo "<img class='resources-image' src='Content/easy.jpg'>";
    }
    else if($value1 == "beginner" && $value2 == "age4") {
        // echo "beginner 60+";
        echo "<img class='resources-image' src='Content/somewhere-over-tr.jpg'>";
    }
    else if ($value1 == "intermediate" && $value2 == "age4"){
        // echo "intermediate 60+";
        echo "<img class='resources-image' src='Content/somewhere-over-tr.jpg'>";
    }
    else if($value1 == "advanced" && $value2 == "age4"){
        // echo "advanced 60+";
        echo "<img class='resources-image' src='Content/somewhere-over-tr.jpg'>";
    }
?>

<br><br>
<a href="songs.php"><button class="main-button">BACK TO SONGS PAGE</button></a>

</div>

<?php include 'footer.php' ?>

