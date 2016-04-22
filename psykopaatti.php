<?php
//Kysymysten lukumäärä kiinteä
$kysymyslkm = 6;
// Pisteet lasketaan vain, jos lomakkeen painiketta on painettu
if (!isset($_POST['painike'])){
   lomake();
} else {
    $pisteet = anna_pisteet($kysymyslkm);
    echo "Tekijä: <em>{$_POST['nimi']}</em><br>";
    echo "Kokonaispistemäärä: <em>$pisteet pistettä</em>";
    echo '<br><span style="border-top: solid black thin; background-color:#eee"> Psykopaattiset piirteesi ovat:</span><br>';
    if (12 < $pisteet){
        echo '<h3> Olet täysi psykopaatti! </h3><br>';
        }
    if (7< $pisteet && $pisteet >= 11){
        echo '<h3> Menisin sinuna psykologille! </h3><br>';
    }
    if (4 < $pisteet && $pisteet >= 7){
        echo '<h3>Sinussa on aika paljon psykopaatin piirteitä. </h3><br>';
    }
    if (0 <= $pisteet && $pisteet >= 4){
        echo '<h3> Sinulla on pikkuisen psykopaatin piirteitä, todennäköisesti olet kuitenkin hieman outo ihminen.</h3><br>';
    }
    if ($pisteet < 0) {
        echo '<h3> NÖÖÖSSÖ! </h3><br>';
    }
}
function lomake()
{
?>
   <h3 style="border-top: solid thin black;
  color:#000;background-color:#eee">
  Tämän testin avulla saat tietää oletko psykopaatti</h3>
  <em>Vastaa rehellisesti seuraaviin kysymyksiin</em><br><br>
 
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 
   <span style="border-top: solid black thin;
   background-color:#eee">
   1.Petytkö yleensä elokuvien loppuratkaisuihin?
</span><br>
  <input type="radio" name="kysymys1" value="0">
 En!<br>
  <input type="radio" name="kysymys1" value="0">
 Joskus.<br>
   <input type="radio" name="kysymys1" value="2">
  Aika usein, koska olen pahisten puolella!<br>
  
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   2. Oletko hyvä valehtelija?</span><br>
  <input type="radio" name="kysymys2" value="2">
 Todellakin! Ja valehtelen mielelläni.<br>
  <input type="radio" name="kysymys2" value="1">
  Tarvittaessa<br>
  <input type="radio" name="kysymys2" value="1">
  Jään yleensä kiinni. Haluaisin olla hyvä valehtelija.<br>
  <input type="radio" name="kysymys2" value="0">
En edes halua valehdella. <br>
   
  <span style="border-top: solid black thin;
   background-color:#eee">
   3. Jos olisi täysin varmaa ettet jää kiinni ja että kaikki menisi suunnitellusti, voisitko tappaa jonkun henkilön, josta et pidä, jos saisit siitä 10 miljoonaa euroa?:</span><br>
  <input type="radio" name="kysymys3" value="5">
  En tarvitsisi edes rahaa!<br>
  <input type="radio" name="kysymys3" value="3">
 Kai minä voisin, jos en tuntisi henkilöä. <br>
 <input type="radio" name="kysymys3" value="1">
 Harkitsisin hetken, mutta en kuitenkaan. <br>
  <input type="radio" name="kysymys3" value="0">
  En ikinä! <br>
  <span style="border-top: solid black thin;
   background-color:#eee">
    
   4. Kun kuulet ihmisten nauravan viereisessä pöydässä, pelkäätkö niiden toisinaan nauravan sinulle?</span><br>
  <input type="radio" name="kysymys4" value="0">
  Kyllä<br>
  <input type="radio" name="kysymys4" value="1">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   5. Pelkäävätkö muut ihmiset sinua?</span><br>
  <input type="radio" name="kysymys5" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys5" value="0">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   6. Käytätkä mielialasi parantamiseen säännöllisesti alkoholia tai lääkkeitä?</span><br>
  <input type="radio" name="kysymys6" value="1">
Kyllä<br>
  <input type="radio" name="kysymys6" value="0">
  En<br>
 
  Nimi: <input type="text" name="nimi" size="20"><br>
  <input type="submit" name="painike" value="Lähetä">
</form>
</fieldset>
<?php
} //lomake()
<?php
function anna_pisteet($kysymyslkm)
{
  $oikea_lkm = 0;
  for($i = 1; $i <= $kysymyslkm; $i++) {
     $kohta = "kysymys$i";
     if (isset($_POST[$kohta])) {
           echo ("$$kohta: $_POST[$kohta]<br>\n");
           $oikea_lkm += $_POST[$kohta];
     }
  }
  return $oikea_lkm;
}
?>