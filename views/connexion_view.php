<?php require 'head.php'; ?>
<?php require '../controller/add_connexion.php' ?>

 <!-- Les liens CSS -->
   <link rel="stylesheet" type="text/css" href="../css/connexion.css">

<body>

    <!-- Ligne bootstrap (row) -->
    <div class="row">

        <!-- Colonne de gauche --> 
        <div class="col-xl-5 fromage-simplon">

            <div class="texteaccueil text-center">

                <h1 class="fromagerie ">Fromagerie Simplon</h1>
                <h5 class="simplon ">Vente de fromages européens</h5>


           </div>
       </div>


       <!-- Colonne de droite -->  
       <div class="col-xl-7">

        <div class="connexion text-center ">

            <!-- Navbar --> 


            <!-- appel de la navbar.php -->
           <?php require 'navbar.php' ?>

             <h2>Connexion</h2>



             <div class="formulaire">

<form action="" method="POST" class="form-line mx-auto">
             <div class="form-group">
    <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre Email">
  </div>
<div class="form-group">
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre Mot de Passe">
  </div>
     <div class="form-group">
    <input type="submit" class="form-control" id="valideconnexion" name="formconnexion" placeholder="Se connecter" >
  </div>
</form>
</div>




<?php if(isset($erreur)){ ?>
<div class="alert alert-danger" role="alert">
   <?= $erreur; ?>
</div>
<?php
 } ?>