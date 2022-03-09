<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">Mes Hobbies</a></li>
    </ul>
</nav> -->

<?php
function renderMenuToHTML($currentPageId,$currentLang) {
    if ($currentLang=='fr'){
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'hobbies' => array('Mes Hobbies'),
            'contact' => array('Mes coordonnées')
        );
        $mymenu2 = array(
            // idPage titre
            'accueil' => array( 'Home Page'),
            'cv' => array( 'CV' ),
            'hobbies' => array('My Hobbies'),
            'contact' => array('My contact information')
        );
        echo "
        <nav class=\"menu\">
            <ul>"."\n";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId==$pageId)
                echo "<li><a class=\"t1\" href=\"Fr\index.php?page=".$pageId."&lang=fr\">".$pageParameters[0]."</a></li>"."\n";
            else
                echo "<li><a href=\"index.php?page=".$pageId."&lang=fr\">".$pageParameters[0]."</a></li>"."\n";
        }
        foreach($mymenu2 as $pageId => $pageParameters) {
            if($currentPageId==$pageId)
                echo "<li><a href=\"index.php?page=".$currentPageId."&lang=en\">Towards English Version : ".$pageParameters[0]."</a></li>"."\n";  
        }
    }
   elseif ($currentLang=='en'){
       // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'Home Page'),
            'cv' => array( 'CV' ),
            'hobbies' => array('My Hobbies'),
            'contact' => array('My contact information')
        );
        $mymenu2 = array(
            // idPage titre
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'hobbies' => array('Mes Hobbies'),
            'contact' => array('Mes coordonnées')
        );
        echo "
        <nav class=\"menu\">
            <ul>"."\n";
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId==$pageId)
                echo "<li><a class=\"t1\" href=\"En\index.php?page=".$pageId."&lang=en\">".$pageParameters[0]."</a></li>"."\n";
            else
                echo "<li><a href=\"index.php?page=".$pageId."&lang=en\">".$pageParameters[0]."</a></li>"."\n";
        }
        foreach($mymenu2 as $pageId => $pageParameters) {
            if($currentPageId==$pageId)
                echo "<li><a href=\"index.php?page=".$currentPageId."&lang=fr\">Vers la version française : ".$pageParameters[0]."</a></li>"."\n";  
        }
   }
   echo "\n"."
   </ul>
</nav>"; 
}
?>