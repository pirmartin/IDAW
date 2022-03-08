<!doctype html>
<html>

<head>
</head>

<body>
    La date d'aujourd'hui est le :
    <?php
    // Affichage de la date
    echo date("d/m/Y");
    ?>

    <?php
    echo 'Une chaine \n guillemets \' simple';
    //Affiche : Une chaine \n guillemets ' simple
    $i = 'doubles';
    echo "Guillemets \n $i";
    //Affiche : Guillemets
    // doubles
    $a = "Hello ";
    $b = $a . "World !";
    echo $b; //Affiche : "Hello World !"
    ?>

    <?php
    function afficher( $texte, $saut = 1 ) {
        echo $texte;
        for( $i = 0 ; $i < $saut ; $i++)
        echo "\n";
        }
        afficher("Hello", 0);
        afficher(" World !");
        afficher("Réponse", 6);
        afficher("Réponse", 0);
    ?>

    <?php
    $tab = array("A","B","C");
    $tab2[0] = "A";
    $tab2[1] = "B";
    $tab2[2] = "C";
    $tab3[] = "A";
    $tab3[] = "B";
    $tab3[] = "C";

    // affiche récursivement le tableau
    echo "tab : "; print_r($tab);
    // supression de la clef 0
    unset($tab[0]);
    echo "tab : "; print_r($tab);
    //copie d'un tableau
    $tab2 = array_values($tab);
    echo "tab2 : "; print_r($tab2);
    // découpe une chaîne en tableau
    $tab = explode("/", "12/06/2007");
    print_r($tab);
    // nombre d’éléments dans le tableau
    echo "nb elt = ".count($tab)."\n";

    $tab = array(4,2,3,4,8,6);
    echo "valeurs dans tab : "."\n";
    for( $i = 0 ; $i<count($tab) ; $i++){
    echo $tab[$i]."\n";
    }
    // les fonctions max et min existent
    echo "nb min = ".min($tab)."\n";
    echo "nb max = ".max($tab)."\n";

    $tab = array(1,2,3,4,5,6);
    $i = 0;
    echo "3 premieres valeurs dans tab : ";
    while( $i<count($tab) and ($i<3) ){
    echo $tab[$i]."\n";
    $i++;
    }

    $tab = array(5,2,5,7,4,6);
    foreach($tab as $value){
    echo $value."\n";
    }
    foreach($tab as $key => $value){
        echo $key." : ".$value."\n";
    }

    $personne = array(
        'prenom' => 'John',
        'nom' => 'Doe',
        'age' => 20
        );
    // Affichages équivalents :
    echo "M. ".$personne['prenom']."\n";
    echo "M. {$personne['nom']}\n";
    
    $t = array(5 => 43, 32, 56, "b" => 12);
    $u = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    // $t et $u sont identiques
    // Affichage d’un élément
    echo $u["b"]."\n";
    foreach($u as $key => $value){
        echo $key." : ".$value."\n";
    }

    $matrice = array(
        array( 1, 18, 6 ),
        array( -1, 1, 8 ),
        array( 13, 18, 3 )
        );
    echo $matrice[1][2]; //Affiche 8
    echo "\n";
    $personnes = array(
    array( 'prenom' => 'John',
    'nom' => 'Doe', 'age' => 20 ),
    array( 'prenom' => 'Luke',
    'nom' => 'Skywalker', 'age' => 17 ),
    );
    echo $personnes[0]['prenom']; //Affiche John
    
    ?>

</body>

</html>