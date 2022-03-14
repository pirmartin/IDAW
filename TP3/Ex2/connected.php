<!-- <?php
    echo "Le login est ".$_GET['login'];
?>
<br>
<?php
    echo "Le mot de passe est ".$_GET['password'];
?> -->

<!-- 
<?php
// on simule une base de données
$users = array(
// login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;

if(isset($_GET['Login']) && isset($_GET['Password'])) {
    $tryLogin=$_GET['Login'];
    $tryPwd=$_GET['Password'];
    // si login existe et password correspond
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
?> -->

<?php
// on simule une base de données
$users = array(
// login => password
    'riri' => 'fifi',
    'yoda' => 'maitrejedi' );
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;

if(isset($_POST['Login']) && isset($_POST['Password'])) {
    $tryLogin=$_POST['Login'];
    $tryPwd=$_POST['Password'];
    // si login existe et password correspond
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
    session_start();
    $_SESSION["Login"] = $login;
    echo "Login : ".$_SESSION["Login"]."<br>";
}
?>
<!-- 
<?php
    echo "Le login est ".$_POST['login'];
    ?>
    <br>
<?php
    echo "Le mot de passe est ".$_POST['password'];
?> -->

<?php 
echo "<nav class=\"menu\">
        <ul>
            <li class=\"t1\"><a class=<\"t1\" href=\"index.php\">Vers l'index</a></li>
        </ul>
    </nav>";
?>        
        