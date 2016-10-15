<?php
    foreach($_POST as $key=>$value){$$key=$value;}
    foreach($_GET as $key=>$value){$$key=$value;}

    require_once('../header/head.php');
	require_once('../vue/navbar/navbar.php');
	require_once('../vue/accueil.php');
	require_once('../header/footer.php');
?>