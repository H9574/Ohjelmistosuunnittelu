<?php
//navigointi menupalkki
?>
<div class="menu">
 
        <nav><ul>
 
        <li class="active"> <a href="Etusivu">Etusivu</a></li>
        <li> <a href="ElamaTestit.php">Elämä testit</a></li>
        <li> <a href="AlykkuusTestit.php">Älykkyys testit</a></li>
        <li> <a href="ElainTestit.php">Eläin testit</a></li>
        <li> <a href="ristinolla.php">Pelejä</a></li>
<?php
if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true) {
    echo "<li> <a href='profiili.php'>Luo tunnukset</a></li>";
    echo "<li> <a href='login.php'>Kirjaudu</a></li>";
} else {
    echo "<a href='logout.php'>Kirjaudu ulos</a>";
}
?>   
</ul></nav>
</div>