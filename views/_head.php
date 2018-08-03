<?php
session_start();
require  "../models/db.class.php";
require  "../models/panier.class.php";

$BDD = new BDD(); 
$panier = new panier($BDD);


?>