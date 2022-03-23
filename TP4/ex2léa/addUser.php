<?php
    
    // on simule une base de données
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //On établit la connexion
    $mysqli = mysqli_connect($servername, $username, $password, 'tp4');

    //On vérifie la connexion
    if(!$mysqli){
        die('Erreur : ' .mysqli_connect_error());
    }
    
    console.log($_POST['nom']);
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $cours = $_POST['cours'];
        $remarques = $_POST['remarques'];

        $query = "INSERT INTO tp4 (Nom,Prénom,Date_de_naissance,Aime_le_cours_web,Remarques) VALUES ('$nom', '$prenom', '$date', '$cours', '$remarques')";
        $result = mysqli_query($mysqli, $query);

        if($result)
            echo json_encode($result);
        
        else{
            echo 'Erreur';
        }
    }
?>