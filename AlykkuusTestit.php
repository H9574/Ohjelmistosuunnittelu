<?php
//ÄlykkyysTestit
session_start();
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
		//Navigointipalkki
        include("navbar.php");
        ?>
        </header>

        <div class="mainContent">
        <div class="content">
                <article class="topcontent">
                <header>
                        <h2><a href="#" title="eka kysely"> First post </a></h2>
                        </header>

                        <content>
                                <p>Lorem ipsum dolor sit amet, consectetuer adi$
                                </p>
                        </content>
                </article>
                <article class="bottomcontent">
                <header>
                        <h2><a href="#" title="toka kysely"> Toka kysely </a></$
                        </header>

                        <content>
                                <p>Lorem ipsum dolor sit amet, consectetuer adi$
                                </p>
                        </content>
                </article>
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
</article></aside>

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

