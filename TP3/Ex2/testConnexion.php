<!DOCTYPE html>
<html>
    <head>
        <title>Connexion à phpMyAdmin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password, 'tp3_idaw');
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie <br>';

            $result = $conn->query("SELECT * FROM user");
            print_r($result);

            echo "<table>
                    <th>ID</th>
                    <th>Login</th>
                    <th>Password</th>";
            while ($row = $result->fetch_assoc()) {
                echo "
                        <tr>
                            <td>".$row['ID']."</td>
                            <td>".$row['Login']."</td>
                            <td>".$row['Password']."</td>
                        </tr>"
                      ;  
            }
            echo "</table>";
        ?>
    </body>
</html>