<?php
//Ellin tekemä!!!
 
//Kysymysten lukumäärä kiinteä
$kysymyslkm = 6;
// Pisteet lasketaan vain, jos lomakkeen painiketta on painettu
if (!isset($_POST['painike'])){
   lomake();
} else {
    $pisteet = anna_pisteet($kysymyslkm);
    echo "Kokonaispistemäärä: <em>$pisteet pistettä</em>";
    echo '<br><span style="border-top: solid black thin; background-color:#eee"> Henkisesti olisit:</span><br>';
    if ($pisteet > 11){
        echo '<h3> Olet aikuinen! </h3><br>';
    }
    if ($pisteet > 5 && $pisteet <= 11){
        echo '<h3>Olet varhaisaikuinen. </h3><br>';
    }
    if ($pisteet >=2 && $pisteet <= 5){
        echo '<h3> Teini </h3><br>';
    }
    if ($pisteet < 2) {
        echo '<h3> Olet VAUVA! </h3><br>';
    }
}
function lomake()
{
?>
   <h3 style="border-top: solid thin black;
  color:#000;background-color:#eee">
  Mikä on henkinen ikäsi?</h3>
  <em>Vastaa rehellisesti seuraaviin kysymyksiin</em><br><br>
 
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 
   <span style="border-top: solid black thin;
   background-color:#eee">
   1.Kun saat ylimääräistä rahaa (työnantajalta, vedonlyönnistä, vanhemmilta), mitä teet?
</span><br>
  <input type="radio" name="kysymys1" value="2">
  Investoin tai säästän sen<br>
  <input type="radio" name="kysymys1" value="0">
 Tuhlaan sen<br>
   <input type="radio" name="kysymys1" value="1">
  Tuhlaan osan ja laitan loput säästöön<br>
  
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   2. Mitä näistä asioista tekisit mieluiten hyvän ystäväsi kanssa?</span><br>
  <input type="radio" name="kysymys2" value="0">
 Leikkisin tyynysotaa<br>
  <input type="radio" name="kysymys2" value="1">
  Lähtisin baariin<br>
  <input type="radio" name="kysymys2" value="2">
  Kävisin saunassa<br>
  <input type="radio" name="kysymys2" value="3">
Lähtisin torikahville<br>
   
  <span style="border-top: solid black thin;
   background-color:#eee">
   3. Kun elämässäsi tapahtuu jotakin todella ikävää:</span><br>
  <input type="radio" name="kysymys3" value="2">
  Itket, mutta lopulta jatkat elämää.<br>
  <input type="radio" name="kysymys3" value="0">
  Saat itkupotkuraivarit.<br>
 <input type="radio" name="kysymys3" value="1">
  Vuodatat ongelmasi äidillesi ja kysyt neuvoa<br>
  <input type="radio" name="kysymys3" value="3">
  Suhtaudut asiaan neutraalisti, otat huomioon kaiken mahdollisen ja yrität parantaa tilanteen. <br>
  <span style="border-top: solid black thin;
   background-color:#eee">
   4. Oletko rikas?</span><br>
  <input type="radio" name="kysymys4" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys4" value="0">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   5. Onko maailma muuttumassa parempaan suuntaan?</span><br>
  <input type="radio" name="kysymys5" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys5" value="0">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   6. Ajatko usein punaisia päin?</span><br>
  <input type="radio" name="kysymys6" value="0">
  Aina, kun kukaan ei katso<br>
  <input type="radio" name="kysymys6" value="1">
  En ikinä<br>
   
  <input type="submit" name="painike" value="Lähetä">
  </form>
</fieldset>
<?php
} //lomake()
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