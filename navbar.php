<?php
//navigointi menupalkki
?>
<div class="menu">

        <nav><ul>

        <li class="active"> <a href="Etusivu">Etusivu</a></li>
        <li> <a href="ElamaTestit.php">Elämä testit</a></li>
        <li> <a href="AlykkuusTestit.php">Älykkyys testit</a></li>
        <li> <a href="ElainTestit">Eläin testit</a></li>
        <li> <a href="profiili.php">Profiili</a></li>	
<?php
// Kirjautumattomat pääsevät kirjautumaan
if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
   echo "<li> Kirjautunut: nobody </li>";
   echo "´<li><a href='login.php'>Kirjaudu</a></li>";
} else { // ja kirjautuneet uloskirjautumaan
   echo "<li>Kirjautunut: <span style='background: yellow;'>{$_SESSION['uid']}</span></li>";
   echo "<li><a href='logout.php'>Kirjaudu ulos</a></li>";
}
?>
<!--
        <form action="sisaan.php" method="post">
        <li> Tunnus: <input type="text" name="tunnus"> </li>
        <li> Salasana: <input type="text" name="salasana"> </li>
        <li> <input type="submit" value="Kirjaudu"> </li>
        </form>
-->		
</ul></nav>
<!--
<ul>
  <li><a href="index.html">Pääsivu</a></li>
  <li><a href="henkilokunta.php">Elämä testit</a></li>
  <li><a href="hinnasto.php">Älykkyys testit</a></li>
  <li><a href="profiili.php">Eläin testit</a></li>
  <li><a href="profiili.php">Oma profiili</a></li>
</ul>
-->

</div>
