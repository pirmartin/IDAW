<?php
require_once('template_header.php');
?>
        <h1>MES HOBBIES !</h1>
    <nav class="menu">
        <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">CV</a></li>
        <li class="t1"><a class="t1" href="hobbies.php"><strong>Hobbies</strong></a></li>
        </ul>
    </nav>
    <div class="conteneur-flexible">Mes Hobbies sont : 
        <ul>
            <div class="conteneur-flexible2"> <li> <div class="élément-intérieur"> Natation </div> <div class="élément-intérieur"> <img src="logo natation.JPG"> </div> </li> </div>
            <div class="conteneur-flexible2"> <li> <div class="élément-intérieur"> Tennis </div> <div class="élément-intérieur"> <img src="logo tennis.JPG"> </div> </li> </div>
            <div class="conteneur-flexible2"> <li> <div class="élément-intérieur"> Jeux Vidéos </div> <div class="élément-intérieur"> <img src="jeu vidéo logo.png"> </div> </li> </div>
            <div class="conteneur-flexible2"> <li> <div class="élément-intérieur"> Echecs </div> <div class="élément-intérieur"> <img src="echecs.JPG"> </div> </li> </div>
        </ul>
    </div>

<?php
require_once('template_footer.php');
?>