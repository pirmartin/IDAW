<?php
    $feuille_css = $_COOKIE['Style_choisi'];
?>

<?php
    echo "<link rel=\"stylesheet\" href=".$feuille_css." type=\"text/css\"
    media=\"screen\" title=\"default\" charset=\"utf-8\" />";
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
    $style = $_GET['css'];
    echo $style."<br>";
    setcookie("Style_choisi", $style);
    print_r($_COOKIE);
    echo "<br>";
?> 

<?php
    echo $_COOKIE['Style_choisi'];
?>