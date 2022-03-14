<?php
    session_start();
    if(isset($_SESSION['Login'])){
        echo "Login : ".$_SESSION['Login']."<br>";
    } 
?>

<h1> Ceci est une page de test. Quelle est la couleur perçue ? </h1>

<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<?php
    if(isset($_GET['css'])){
        $style = $_GET["css"];
        echo $style."<br>";
        setcookie("Style_choisi", $style);
        print_r($_COOKIE);
        echo "<br>";
    }
    if(isset($_GET['css'])){
        echo "<link rel=\"stylesheet\" href=".$_GET['css']." type=\"text/css\"
            media=\"screen\" title=\"default\" charset=\"utf-8\" />";
    }
    elseif(isset($_COOKIE['Style_choisi'])) {
        echo "<link rel=\"stylesheet\" href=".$_COOKIE["Style_choisi"]." type=\"text/css\"
            media=\"screen\" title=\"default\" charset=\"utf-8\" />";
    }    
?> 

<?php 
    echo "<nav class=\"menu\">
            <ul>
                <li class=\"t1\"><a class=<\"t1\" href=\"connected.php\">Vers la page de connexion</a></li>
                <li class=\"t1\"><a class=<\"t1\" href=\"se_deconnecter.php\">Se déconnecter</a></li>
            </ul>
        </nav>";
?>   