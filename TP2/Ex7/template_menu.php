<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="hobbies.php">Mes Hobbies</a></li>
    </ul>
</nav> -->

<?php
function renderMenuToHTML($currentPageId,$currentLang) {
        // un tableau qui définit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'fr' => 'Accueil', 'en' => 'Home Page' ),
            'cv' => array( 'fr'=>'Cv','en'=>'CV' ),
            'hobbies' => array('fr'=>'Mes Hobbies','en'=>'My Hobbies'),
            'contact' => array('fr'=>'Mes coordonnées','en'=> 'My contact information'),
            'projets' => array('fr' => 'Mes projets', 'en' => 'My Projects' )
        );
        echo "
        <nav class=\"menu\">
            <ul>"."\n";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
            if($currentPageId==$pageId){
                echo "class=\"t1\" ";
            }
            echo "href=\"index.php?page=".$pageId."&lang=".$currentLang."\">".$pageParameters[$currentLang]."</a></li>"."\n";
        }
        foreach($mymenu as $pageId => $pageParameters) {
            if($currentPageId==$pageId){
                if($currentLang=='fr'){
                    echo "<li><a href=\"index.php?page=".$currentPageId."&lang=en\">Towards English Version : ".$pageParameters['en']."</a></li>"."\n"; 
                }
               elseif($currentLang=='en'){
                    echo "<li><a href=\"index.php?page=".$currentPageId."&lang=fr\">Vers la version française : ".$pageParameters['fr']."</a></li>"."\n"; 
               }
            } 
        }
   echo "\n"."
   </ul>
</nav>"; 
}
?>