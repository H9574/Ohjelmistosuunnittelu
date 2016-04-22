<?php
//Etusivu
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
            <h2><a href="#" title="eka kysely"> Kysely sivumme </a></h2>
            </header>
             
            <content>
                <p>
                Maailmassa on tuhansia suomalaisia, jotka kokevat tylsistymistä aika ajoin eivätkä keksi tekemistä vaikka istuvat maailman 
                mahtavimman tietoverkon, internetin, äärellä. Päätimme luoda näille tylsistyneille täysi-ikäisille ihmisille loistavan vaihtoehdon 
                tylsistyneenä näytön tuijotukselle ja iän ikuisille kissavideoille.</p>
                <p>
                Alkaako pasianssi tuntua puulta? Ovatko nastojen reiät seinissä käyneet liiankin tutuiksi? Saavatko kissavideot sinut lähinnä 
                haukottelemaan hekottelun sijaan? Tässä meillä on loistava ratkaisu kaikkiin näihin pulmiin: TestiSivusto! Tule tekemään maailman 
                huvittavimpia ja mielenkiintoisimpia testejä, jotka avaavat portin suoraan sielusi syvimpiin onkaloihin! Olet varmasti aina 
                halunnut tietää, mikä eläin olisi sielun kumppanisi ja kuinka älykäs olet. Ja saat vastauksen myös kaikkein tärkeimpään kysymykseen: 
                milloin tulet kuolemaan? Dyn dyn dyyyyn~</p>
                <p>
                Miksi juuri meidän sivustomme? Siksi koska meidän sivustomme ovat ensinnäkin suunnattu ainoastaan yli 18 vuotiaille ja koska 
                meidän testimme ovat yksinkertaisesti parhautta, jota ei koe missään muualla. Piste.</p>
                <p>
                Muistathan klikkailla ahkerasti epäilyttäviä mainoksia, jotta kehittäjät pysyvät kiinni leivän kannassa. Tai jos käytät 
                adblockeria, niin tekisithän vähintään lahjoituksen sivuston ylläpitäjille. Kiitos.</p>
            </content>
        </article>
        <article class="bottomcontent">
        <header>
            <h2><a href="#" title="toka kysely"> Toka kysely </a></h2>
            </header>
             
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
        include("testaus-evaste.php");
?>
</p>
</article>
</aside>
 
<footer class="mainFooter">
<p> copyright bla bla bla </p>
 
</body>
</html>