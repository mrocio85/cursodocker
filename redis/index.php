<?php

        // pagina1.php
session_start();
$_SESSION['count']++;

printf ( $_SERVER["SERVER_ADDR"]." diu que anem pel count ".$_SESSION['count']."\n" );

