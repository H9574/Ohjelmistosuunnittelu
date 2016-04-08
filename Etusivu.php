<?php
//Etusivu
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
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis
facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus.
Donec ultricies nisl ut felis, suspendisse potenti. Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat. Sed
congue augue vitae neque. Nulla consectetuer porttitor pede. Fusce purus morbi tortor magna condimentum vel, placerat id blandit sit amet tortor. Lorem ipsum dolor sit amet, consectetuer
adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu. Sed arcu lectus auctor vitae, consectetuer e$
Aliquam erat volutpat. Sed congue augue vitae neque. Nulla consectetuer porttitor pede. Fusce purus morbi tortor magna condimentum vel, placerat id blandit sit amet tortor.
                                </p>
                        </content>
                </article>
                <article class="bottomcontent">
                <header>
                        <h2><a href="#" title="toka kysely"> Toka kysely </a></h2>
                        </header>

                        <content>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien.$
                                </p>
                        </content>
                </article>
        </div>
        </div>

<aside class="ylä-sivupalkki">
<article>
<h2> Ylä sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id justo ut vitae massa. Proin in dolor mauris consequat aliquam. Donec ipsum, vestibulum ullamcorper venenatis augu$
pretium condimentum.</p>
</article>
</aside>

<aside class="keski-sivupalkki">
<article>
<h2> Keskinmäinen sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id justo ut vitae massa. Proin in dolor mauris consequat aliquam. Donec ipsum, vestibulum ullamcorper venenatis augu$
condimentum.</p>
</article>
</aside>

<aside class="ala-sivupalkki">
<article>
<h2> Alimmainen sivupalkki </h2>
<p> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id justo ut vitae massa. Proin in dolor mauris consequat aliquam. Donec ipsum, vestibulum ullamcorper venenatis augu$
condimentum.</p>
</article>
</aside>

<footer class="mainFooter">
<p> copyright bla bla bla </p>

</body>
</html>
