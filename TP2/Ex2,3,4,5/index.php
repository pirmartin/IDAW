<?php
require_once('template_header.php');
?>

<?php
require_once('template_menu.php');
renderMenuToHTML('index');
?>

<img src="Logo_IMT_Nord_Europe.png" alt="Logo de l'IMT Nord-Europe">

<h1>Titre de niveau 1</h1>



<p>Mon premier paragraphe écrit en HTML
    <br>
    <br>
    Je suis passé 2 fois à la ligne !
</p>

<h3>Animaux domestiques</h3>
<p font=green> Test d'une première liste ordonnée </p>
<ol type="I">
    <li> Chat : Aucun</li>
    <li> Chien : Nanouck (<strong>4 ans et 8 mois</strong>), Nicki (<strong>4 ans et 4 mois</strong>)</li>
    <li> Poisson : Pas à ma connaissance... </li>
</ol>

<?php
require_once('template_footer.php');
?>