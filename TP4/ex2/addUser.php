<?php
$servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'tp4'; 
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['nom'])){
    //stockage des valeurs de POST dans des variables
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['date'];
    $aime = $_POST['opinion'];
    $remarques = $_POST['remarques'];
    // requête + incorporation dans la base de données
    $res = $conn->query("INSERT INTO tp4 (Nom, Prenom, Date_de_naissance, Aime_le_cours, Remarques) VALUES ('$nom','$prenom','$naissance','$aime','$remarques')");
    if($res){
        echo json_encode($res);
    }
    else{
        echo "Error request";
    }
}
?>