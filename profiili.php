<?php
//Profiili
session_start();

// Alustetaan/tyhjätään profiiliasetukset tarvittaessa:
if (!isset($_SESSION['valikko'])) {
  $_SESSION['valikko']  = array("hautaus"   => array("sisalto" => "","rasti" => ""),
                                "urheilu" => array("sisalto" => "","rasti" => ""),
                                "lemmikki"  => array("sisalto" => "","rasti" => ""));
  $_SESSION['kokonimi']  = "";
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
<h3>Aseta/Muokkaa profiiliasi:</h3>
<form action="tallenna-profiili.php" method="get">
Nimi:<br>
<input type='text' name='kokonimi' value="<?php echo $_SESSION['kokonimi']?>"><br><br>
<select name="harrastus[]" size="3" multiple>
<?php
   // Luodaan valikko sessiotaulukon mukaan:
   foreach ($_SESSION['valikko'] as $avain => $arvo) {
      echo "<option value='$avain'{$arvo['rasti']}>" . ucfirst($avain) . "</option>\n";
   }
?>
</select><br><br>
<input type="submit" name="nappi" value='Tallenna'><br>
<input type="submit" name="nappi" value='Tyhjää profiili'><br>
</form>


                                </p>
                        </content>
                </article>

<!--
                <article class="bottomcontent">
                <header>
                        <h2><a href="#" title="toka kysely"> Toka kysely </a></$
                        </header>

                        <content>
                                <p>Lorem ipsum dolor sit amet, consectetuer adi$
                                </p>
                        </content>
                </article>
-->

        </div>
        </div>

<aside class="ylä-sivupalkki">
<article>
<h2> Ylä sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id j$
</article>
</aside>

<aside class="keski-sivupalkki">
<article>
<h2> Keskinmäinen sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id j$
</article>
</aside>

<aside class="ala-sivupalkki">
<article>
<h2> Alimmainen sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id j$
</article>
</aside>

<footer class="mainFooter">
<p> copyright bla bla bla </p>

</body>
</html>

