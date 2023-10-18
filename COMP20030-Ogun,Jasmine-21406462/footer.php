
<footer class="footer-bar">

<div class="contact">
    
    <p><i class="fa fa-twitter-square social" aria-hidden="true"> Twitter - @lutelegend</i></p>
    
    <p><i class="fa fa-instagram social" aria-hidden="true"> Instagram - @lutelegend</i></p>
    
    <p><i class="fa fa-facebook-square social" aria-hidden="true"> Facebook - Lute Legend Official Page</i></p>

    <p><i class="fa fa-youtube-play social" aria-hidden="true"> Youtube - Lute Legend Official</i></p>
    
    <p><i class="fa fa-envelope social" aria-hidden="true"> Email - lute-legend@gmail.com</i></p>
      
    </div>
    <br><br>
    
    <button class="change" onclick="changeTheme()">TOGGLE DARK MODE</button> <!-- <button class="change" onclick="changeFont()">TOGGLE ACCESSIBILITY FONT</button> -->

    <script>
        function changeTheme(){
            var x = document.body;
            x.classList.toggle("dark-mode");
        }

        // function changeFont(){ -----> attempted to make functionality to change font
        //     var y = document.body;    but didn't have time to get it working
        //     y.setAttribute("accessibility");
        // }
    </script>

    <br><br>
<?php
    echo "LUTE LEGEND <br>";
    echo "© Copyrights Reserved ";
    echo date("Y");
?>
</footer>

</body>
</html>
