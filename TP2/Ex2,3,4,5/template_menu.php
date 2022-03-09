<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">Mes Hobbies</a></li>
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
        <ul>"."\n";
    foreach($mymenu as $pageId => $pageParameters) {
        if($currentPageId==$pageId)
            echo "<li><a class=\"t1\" href=".$pageId.".php>".$pageParameters[0]."</a></li>"."\n";
        else
            echo "<li><a href=".$pageId.".php>".$pageParameters[0]."</a></li>"."\n";
        }
    echo "\n"."
        </ul>
    </nav>"; 
}
?>