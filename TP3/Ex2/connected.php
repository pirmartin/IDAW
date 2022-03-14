<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($servername, $username, $password, 'tp3_idaw');
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion réussie <br>';
$result = $conn->query("SELECT * FROM user");
$users = array();
while ($row = $result->fetch_assoc()) {
    array_push($users, $row['Login'] => $row['Password']);
}    
if(isset($_POST['Login']) && isset($_POST['Password'])) {
    $tryLogin=$_POST['Login'];
    $tryPwd=$_POST['Password'];
    if(array_key_exists($tryLogin, $users) && $users[$tryLogin] == $tryPwd) {
        $successfullyLogged = true;
        $login = $tryLogin;
    } 
    else
        $errorText = "Erreur de login/password";
} 
else
    $errorText = "Merci d'utiliser le formulaire de login";
if(!$successfullyLogged) {
    echo $errorText;
} 
else {
    echo "<h1> Bienvenue ".$login." </h1>";
}
?>   

<?php
$stack = array("orange" => "bleu", "banana"=>"vert");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>     