<?php
//ElamaTestit
session_start();
 
// Alustetaan/tyhjätään profiiliasetukset tarvittaessa:
if (!isset($_SESSION['valikko'])) {
  $_SESSION['valikko']  = array("ekologinen"   => array("sisalto" => "","rasti" => ""),
                                "Jalkapallo" => array("sisalto" => "","rasti" => ""),
                                "lemmikki"  => array("sisalto" => "","rasti" => ""),
                                "hautaus"   => array("sisalto" => "","rasti" => ""),
                                "urheilu" => array("sisalto" => "","rasti" => ""),
                                "Elaimet"  => array("sisalto" => "","rasti" => "")); 
}
?>
<!DOCTYPE html>
<html lang="en">
 
</html>
 
<head>
        <title>Kyselysivu</title>
        <meta charset="utf-8"/>
 
        <link rel="stylesheet" a href="stylesheet.css" type="text/css"/>
        <meta name="viewport" content="width=device=width, initial-scale=1.8">
</head>
 
<body class="body">
 
        <header class="mainheader">
        <?php
        include("navbar.php");
 
if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "login.php");
  
exit;
}
        ?>
        </header>
 
        <div class="mainContent">
        <div class="content">
                <article class="topcontent">
                        <content>
                                <p>
                                <?php
                                    include("henkinenika.php");
                                ?>
                                </p>
                        </content>
                </article>
                <article class="bottomcontent">
                        <content>
                                <p>
                                 
                        <form action="tallenna-sessio.php" method="get">
                        <select name="harrastus[]" size="3" multiple>
                        <?php
                            // Luodaan valikko sessiotaulukon mukaan:
                            foreach ($_SESSION['valikko'] as $avain => $arvo) {
                                echo "<option value='$avain'{$arvo['rasti']}>" . ucfirst($avain) . "</option>\n";
                            }
                             
                        ?>
                        </select>
                        <input type="submit" name="nappi" value="Lähetä">
                        </form>
                         
                                </p>
                        </content>
                </article>
        </div>
        </div>
 
<aside class="ylä-sivupalkki">
<article>
<h2> Sessiomainos </h2>
<p> 
    <?php
        include("Mainos.php");
    ?>
</p>
</article>
</aside>
 
<aside class="keski-sivupalkki">
<article>
<h2> Profiilimainos </h2>
<p>
<?php
        include("Mainos.php");
?>
</p>
</article>
</aside>
 
<footer class="mainFooter">
<p> copyright bla bla bla </p>
 
</body>
</html>