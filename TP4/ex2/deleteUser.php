<!-- <?php
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
        //$naissance = $_POST['date'];
        //$aime = $_POST['opinion'];
        //$remarques = $_POST['remarques'];
        // requête + incorporation dans la base de données
        $res = $conn->query("DELETE FROM tp4 VALUES (Nom = '$nom' AND Prenom='$prenom'");
        if($res){
            echo json_encode($res);
        }
        else{
            echo "Error request";
        }
    }
?> -->

<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tp4'; 
    //On établit la connexion
    $conn = mysqli_connect($servername, $username, $password, $database);


    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $cours = $_POST['cours'];
        $remarques = $_POST['remarques'];

        $query = "DELETE FROM tp4 WHERE (Nom='$nom' AND Prenom='$prenom' AND Date_de_naissance='$date')";
        $result = mysqli_query($conn, $query);

        $res['req']=$query;
        $res['status']='Erreur requête';
        if($result)
            $res['status']='requête OK';
        print_r($res);
        echo json_encode($result);
        
        /* else{
            echo 'Erreur requête';
        } */
    }
?>