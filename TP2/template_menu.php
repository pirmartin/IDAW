<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">Mes Projets</a></li>
    </ul>
</nav> -->

<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    $mymenu = array(
    // idPage titre
    'index' => array( 'Accueil' ),
    'cv' => array( 'Cv' ),
    'hobbies' => array('Mes Hobbies')
    );
    echo "
    <nav class=\"menu\">
        <ul>";
    foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a href=".$pageId.".php>".$pageParameters."</a></li>"."\n";
        }
    echo "
        </ul>
    </nav>";
        // ...    
}
?>