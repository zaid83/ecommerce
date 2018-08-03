  


    
    <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories 
WHERE pays.id_pays = 1');
      foreach ($reqfromages as $fromage ):?>
  <div id="all">
      
    <div class="backgroundfromage">
             
      <img src="../assets/img_fromages/background_produit.png" alt="background-produits">
        <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
          <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
           <a href="" target="_blank">
           	<?php if ($fromage->id_categories=2){ ?>
           	<img src="../assets/img_fromages/mouton.png" class="mouton" alt="logo de mouton"></a>
           <?php } else if ($fromage->id_categories=1){ ?>
           	<img src="../assets/img_fromages/vache.png" class="mouton"  alt="logo de vache"></a>
           <?php } else { ?>
              <img src="../assets/img_fromages/chevre.png" class="mouton"  alt="logo de chevre"></a>
          <?php } ?>
            <a href="#"><img src="../assets/img_fromages/boutoncroix.png"  alt="bouton de fermeture" id="boutoncroix"></a>
        </div>
      <div class="textefromage">
          
       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
   
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
       <h3 class="details">Détails</h3>
       <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

       <p class="boutonpanier"><a class="boutonajouter addPanier" href="../controller/addpanier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
        
      </div>
    
    
    </div>



<?php endforeach ?>





    
    <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories 
WHERE pays.id_pays = 2');
      foreach ($reqfromages as $fromage ):?>
  <div id="all2">
      
    <div class="backgroundfromage">
             
      <img src="../assets/img_fromages/background_produit.png" alt="background-produits">
        <img src="<?= $fromage->img_fromage; ?>" class="imagefromage" alt="image du fromage">
          <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
           <a href="youtube.com" target="_blank">
           	<?php if ($fromage->id_categories=2){ ?>

           	<img src="../assets/img_fromages/vache.png" class="mouton" alt="logo de mouton"></a>
           <?php } else if ($fromage->id_categories=1){ ?>
           	<img src="../assets/img_fromages/vache.png" class="mouton"  alt="logo de vache"></a>
           <?php } else { ?>
              <img src="../assets/img_fromages/chevre.png" class="mouton"  alt="logo de chevre"></a>
          <?php } ?>
            <a href="#"><img src="../assets/img_fromages/boutoncroix.png"  alt="bouton de fermeture" id="boutoncroix2"></a>
        </div>
      <div class="textefromage">
          
       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
   
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
       <h3 class="details">Détails</h3>
       <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

       <p class="boutonpanier"><a class="boutonajouter addPanier" href="../controller/addpanier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
        
      </div>
    
    
    </div>



<?php endforeach ?>


    
    <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories 
WHERE pays.id_pays = 3');
      foreach ($reqfromages as $fromage ):?>
  <div id="all3">
      
    <div class="backgroundfromage">
             
      <img src="../assets/img_fromages/background_produit.png" alt="background-produits">
        <img src="<?= $fromage->img_fromage; ?>"  class="imagefromage" alt="image du fromage">
          <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon" alt="logo de simplon">
           <a href="youtube.com" target="_blank">
           	<?php if ($fromage->id_categories=2){ ?>

           	<img src="../assets/img_fromages/mouton.png" class="mouton" alt="logo de mouton"></a>
           <?php } else if ($fromage->id_categories=1){ ?>
           	<img src="../assets/img_fromages/vache.png" class="mouton"  alt="logo de vache"></a>
           <?php } else { ?>
              <img src="../assets/img_fromages/chevre.png" class="mouton"  alt="logo de chevre"></a>
          <?php } ?>
            <a href="#"><img src="../assets/img_fromages/boutoncroix.png"  alt="bouton de fermeture" id="boutoncroix3"></a>
        </div>
      <div class="textefromage">
          
       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
   
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
       <h3 class="details">Détails</h3>
       <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

       <p class="boutonpanier"><a class="boutonajouter addPanier" href="../controller/addpanier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
        
      </div>
    
    
    </div>



<?php endforeach ?>

    <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories 
WHERE pays.id_pays = 4');
      foreach ($reqfromages as $fromage ):?>
  <div id="all4">
      
    <div class="backgroundfromage">
             
      <img src="../assets/img_fromages/background_produit.png">
        <img src="<?= $fromage->img_fromage; ?>" class="imagefromage">
          <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon">
           <a href="youtube.com" target="_blank">
           	<?php if ($fromage->id_categories=2){ ?>

           	<img src="../assets/img_fromages/chevre.png" class="mouton"></a>
           <?php } else if ($fromage->id_categories=1){ ?>
           	<img src="../assets/img_fromages/vache.png" class="mouton"></a>
           <?php } else { ?>
              <img src="../assets/img_fromages/chevre.png" class="mouton"></a>
          <?php } ?>
            <a href="#"><img src="../assets/img_fromages/boutoncroix.png" id="boutoncroix4"></a>
        </div>
      <div class="textefromage">
          
       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
   
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
       <h3 class="details">Détails</h3>
       <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

       <p class="boutonpanier"><a class="boutonajouter addPanier" href="../controller/addpanier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
        
      </div>
    
    
    </div>



<?php endforeach ?>

    <?php  $reqfromages = $BDD->query('SELECT * FROM fromage NATURAL JOIN pays
NATURAL JOIN categories 
WHERE pays.id_pays = 5');
      foreach ($reqfromages as $fromage ):?>
  <div id="all5">
      
    <div class="backgroundfromage">
             
      <img src="../assets/img_fromages/background_produit.png">
        <img src="<?= $fromage->img_fromage; ?>" class="imagefromage">
          <img src="../assets/img_fromages/logosimplonfromage.png" class="logosimplon">
           <a href="youtube.com" target="_blank">
           	<?php if ($fromage->id_categories=2){ ?>

           	<img src="../assets/img_fromages/mouton.png" class="mouton"></a>
           <?php } else if ($fromage->id_categories=1){ ?>
           	<img src="../assets/img_fromages/vache.png" class="mouton"></a>
           <?php } else { ?>
              <img src="../assets/img_fromages/chevre.png" class="mouton"></a>
          <?php } ?>
            <a href="#"><img src="../assets/img_fromages/boutoncroix.png" id="boutoncroix5"></a>
        </div>
      <div class="textefromage">
          
       <h1 class="nomfromage"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance1"><?= $fromage->nom_pays; ?></h4>
       <p class="desc1"><?= $fromage->descrip_fromage; ?></p>
   
       <h1 class="prixfromage"><?= number_format($fromage->prix_fromage,2,',',' '); ?>€</h1>
       <h1 class="nomfromage1"><?= $fromage->nom_fromage; ?></h1>
       <h4 class="provenance2"><?= $fromage->nom_pays; ?></h4>
       <h3 class="details">Détails</h3>
       <h2 class="desc3"><?= $fromage->details_fromage; ?></h2>

       <p class="boutonpanier"><a class="boutonajouter addPanier" href="addpanier.php?id=<?= $fromage->id_fromage; ?>">Ajouter au Panier</a></p>
        
      </div>
    
    
    </div>



<?php endforeach ?>