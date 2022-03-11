<?php
    require_once("template_header.php");
?>
<div class="t4"> <img src="Logo_IMT_Nord_Europe.png" alt="Logo de l'IMT Nord-Europe"> </div>
<?php
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $currentLang = 'fr';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    if(isset($_GET['lang'])) {
        $currentLang = $_GET['lang'];
    }
?>

<header class="bandeau_haut">
    <h1 class="titre">Pierre MARTIN</h1>
</header>
<br><br>

<?php
    renderMenuToHTML($currentPageId,$currentLang);
?>

<br><br>
<section class="corps">
    <?php
        $pageToInclude = $currentLang."/" . $currentPageId . ".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
    ?>
</section>

<?php
    require_once("template_footer.php");
?>