<?php
//Profiili
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
        ?>
        </header>
 
        <div class="mainContent">
        <div class="content">
                <article class="topcontent">
                <header>
                        <h2><a href="#" title="eka kysely"> Profiili </a></h2>
                        </header>
 
                        <content>
                                <p>
                        <h3>Luo profiili:</h3>
                        <p>Huom! ei hyväksy erikoismerkkejä kuten {} tai % eikä å tai ô tyyppisiä erikoismerkkejä!</p>
                        <form action="tallenna-profiili.php" method="post">
                        Käyttäjänimi:<br>
                        <?php
                        echo "<textarea name='kauttaja' rows='1' cols='16'>";
                        if (isset($_POST['kauttaja']))echo htmlspecialchars($_POST['kauttaja']);
                        echo "</textarea>";
                        ?>
                        <br><br>
                        Salasana:<br>
                        <?php
                        echo "<textarea name='salasana' rows='1' cols='16'>";
                        if (isset($_POST['salasana']))echo htmlspecialchars($_POST['salasana']);
                        echo "</textarea>";
                        ?>
                        <br><br>
                         
                        <p>Valitse itseäsi kiinnostava aihe</p>
                        <select name="mainos" multiple>
                            <option value="lemmikki">lemmikki</option>
                            <option value="hautaus">kohtalo</option>
                            <option value="urheilu">urheilu</option>
                        </select>
                        <br><br>
                    <input type="submit" name="nappi" value='Tallenna'><br>
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