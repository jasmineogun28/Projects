<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php' ?>
<title>Songs- LUTE-LEGEND</title>
</head>

<body>
    <?php
        include 'navigation.php';
    ?>

    <form name="input" class="song-form" action="form-action.php" method="get">

    <div class="song-p">
        
        <p>Select your skill level:</p>
        <input type="radio" id="beginner" name="skill-level" value="beginner" checked>
        <label for="beginner">Beginner</label><br>

        <input type="radio" id="intermediate" name="skill-level" value="intermediate">
        <label for="intermediate">Intermediate</label><br>

        <input type="radio" id="advanced" name="skill-level" value="advanced">
        <label for="advanced">Advanced</label>
    </div>
  <br>  
    <div class="song-p adjust2">

        <p>Please select your age:</p>
        <input type="radio" id="age1" name="age" value="age1" checked>
        <label for="age1">10 - 25</label><br>

        <input type="radio" id="age2" name="age" value="age2">
        <label for="age2">25 - 40</label><br>  

        <input type="radio" id="age3" name="age" value="age3">
        <label for="age3">40 - 60</label><br>

        <input type="radio" id="age4" name="age" value="age4">
        <label for="age4">60+</label><br><br>

        <input class="main-button" type="submit" value="START PLAYING">
    </div>
    </form>

    <!-- https://www.pexels.com/photo/small-lute-musical-instrument-with-suitcase-on-asphalt-ground-4380452 -->

    <?php include 'footer.php' ?>