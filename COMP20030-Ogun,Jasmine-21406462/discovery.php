<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<title>Discovery - LUTE-LEGEND.COM</title>

<script>
    function display() {
        var x = document.getElementById("discovery-lute");
        if (x.style.display === "none") {
            x.style.display = "block";
        } 
        else {
            x.style.display = "none";
        }
    }
    </script>

<body>
    <?php
        include 'navigation.php';
    ?>

    <div class="container">
        <!-- https://www.shutterstock.com/image-vector/ukulele-isolated-on-white-different-sizes-1846347889 -->
        <img id="d-item1" src="Content/types-of-ukuleles.jpg" alt="Different types of ukulele">

        <p id="d-item2" class="main-text">The ukulele is a member of the <button onclick="display()" class="lute">
            lute</button> family of instruments of Portuguese origin and popularized 
            in Hawaii. <br>It generally employs four nylon strings.<br>The tone and volume of 
            the instrument vary with size and construction. <br><br>Ukuleles commonly come in 
            four sizes: soprano, concert, tenor, and baritone.</p>

            <!-- click the word lute button and display this paragraph -->
        <p id="discovery-lute" class="main-text" style="display: none; padding-right: 10px;">A lute is any plucked string instrument 
            with a neck and a deep round back enclosing a hollow cavity, usually with a 
            sound hole or opening in the body. It may be either fretted or unfretted.</p>

        <p id="d-item3" class="main-text">The instrument, with its four plastic strings and a short neck, 
            originated in Europe and was introduced to Hawaii in 1879 when a 
            Portuguese immigrant named Joao Fernandez jumped off the boat and 
            started strumming and singing with his branguinha (a small 
            guitar-like instrument, sometimes called the machete).<br><i class="fa fa-music" aria-hidden="true"></i></p>
            
        <p id="d-item4" class="main-text">The crowd of Hawaiians were so impressed by his 
            fingerboard <br>prestidigitations that they called the instrument “ukulele,” 
            which <br>translates to “jumping flea.”<br><i class="fa fa-music" aria-hidden="true"></i></p>


         <p id="d-item5" class="main-text">Fernandez and the instrument became local 
            sensation, and the reigning monarch Kalakaua even learned how to play it. By 1900, 
            the sound of the ukulele was ubiquitous across the Islands, where it was pronounced by 
            Hawaiians as “oo-ku-lay-lay.”<br><i class="fa fa-music" aria-hidden="true"></i></p>
        
    </div>
    <?php
        include 'footer.php';
    ?>