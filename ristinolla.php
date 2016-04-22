<?php
//TÄMÄ ON ELLIN :DDDDDD
 
//Pelejä
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
 
$winner = 'n';
$box = array('','','','','','','','','');
if (isset($_POST["lahetabtn"])) {
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    //print_r($box);
    if (($box[0]=='x' && $box[1]=='x' && $box[2] =='x') || ($box[3]=='x' && $box[4]=='x' && $box[5] =='x') || ($box[6]=='x' && $box[7]=='x' && $box[8] =='x') || ($box[0]=='x' && $box[3]=='x' && $box[6] =='x') || ($box[1]=='x' && $box[5]=='x' && $box[7] =='x') || ($box[2]=='x' && $box[6]=='x' && $box[8] =='x') || ($box[0]=='x' && $box[4]=='x' && $box[8] =='x') || ($box[2]=='x' && $box[4]=='x' && $box[6] =='x')) {
        $winner ='x';
        print ("X VOITTI!");
    }
    $blank= 0;
    for ($i=0; $i<=8; $i++) {
        if ( $box[$i] == '') {
            $blank =1;
             
        }
    }
    if ($blank == 1 && $winner == 'n') {
        $i = rand() % 8;
    while($box[$i] != '') {
        $i=rand() % 8;
    }
    $box[$i] = 'o';
    if (($box[0]=='o' && $box[1]=='o' && $box[2] =='o') || ($box[3]=='o' && $box[4]=='o' && $box[5] =='o') || ($box[6]=='o' && $box[7]=='o' && $box[8] =='o') || ($box[0]=='o' && $box[3]=='o' && $box[6] =='o') || ($box[1]=='o' && $box[5]=='o' && $box[7] =='o') || ($box[2]=='o' && $box[6]=='o' && $box[8] =='o') || ($box[0]=='o' && $box[4]=='o' && $box[8] =='o') || ($box[2]=='o' && $box[4]=='o' && $box[6] =='o')) {
         
    $winner='o';
    print("o VOITTI!");
    }
    } else if ($winner =='n') {
        $winner = 't';
        print("Tasapeli!");
    }
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
                <header>
                        <h2><a href="#" title="eka kysely"> Ristinolla </a></h2>
                        </header>
 
                        <content bgcolor="pink">
<form name="ristinolla" method="post" action="ristinolla.php">
<?php
for ($i=0; $i<=8; $i++) {
printf('<input type="text" name="box%s" value="%s">', $i, $box[$i]);
    if ($i == 2 || $i ==5 || $i == 8) {
        print('<br>');
         
    }
}
if ($winner == 'n') {
print('<input type="submit" name="lahetabtn" value="OK!">');
} else {
    print('<input type="button" name="uusipelibtn" value="Pelaa uudestaan!" onclick="window.location.href=\'ristinolla.php\'">');
}
?>
</form>
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
<h2> Profiili mainos </h2>
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