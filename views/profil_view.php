<?php $title = 'Votre Profil'; ?>
<?php require '../includes/head.php' ?>



<!-- Les liens CSS -->
<title> Profil </title>
<link rel="stylesheet" type="text/css" href="../css/inscription.css">

<body>

  <!-- Ligne bootstrap (row) -->
  <div class="row">

    <!-- Colonne de gauche --> 
    <div class="col-xl-5 fromage-simplon">

      <div class="texteaccueil text-center">

        <!--si une session est ouverte -->

        <?php if(isset($_SESSION['id'])){ ?>
          <h3 style="color:white">Bienvenue: <span class="connecte" style="color:yellow"><?php echo $_SESSION['nom']; ?><a href="profil_view.php">(profil)</a></span></h3> 

        <?php } ?>

        <h1 class="fromagerie ">Fromagerie Simplon</h1>
        <h5 class="simplon ">Vente de fromages européens</h5>


      </div>
    </div>



    <!-- Colonne de droite -->  

    <div class="col-xl-7">
      <div class="inscription text-center ">

        <?php require '../includes/navbar.php' ?>
        
        <h2>Mon Profil</h2>
        <!-- Image de profil session img correspond a l'image de session-->
        <img src="<?php echo $_SESSION['img']; ?>" width="250" height="250" alt="image de profil">

        <br>
        <br>
        <br>
        <!-- profil de la session -->
        <table class="table">
         <tr>
          <td class="label">NOM: </td>
          <td><?php echo htmlspecialchars($_SESSION['nom']); ?></td>
        </tr>
        <tr>
          <td class="label">PRENOM: </td>
          <td><?php echo htmlspecialchars($_SESSION['prenom']); ?></td>
        </tr>
        <tr>
          <td class="label">EMAIL: </td>
          <td><?php echo htmlspecialchars($_SESSION['mail']); ?></td>
        </tr>
        <tr>
          <td class="label">ADRESSE: </td>
          <td><?php echo htmlspecialchars($_SESSION['adresse']); ?></td>
        </tr>
        <tr>
          <td class="label">CP: </td>
          <td><?php echo htmlspecialchars($_SESSION['cp']); ?></td>
        </tr>
        <tr>
          <td class="label">VILLE: </td>
          <td><?php echo htmlspecialchars($_SESSION['ville']); ?></td>
        </tr>
        <tr>
          <td class="label">TEL: </td>
          <td><?php echo htmlspecialchars($_SESSION['telephone']); ?></td>
        </tr>

      </table>

      <!-- Recherche des dernieres commandes de l'utilisateur-->

      <?php $livraisons = $BDD->query('SELECT * FROM commandes NATURAL JOIN client WHERE id_client = '.$_SESSION['id'].' ');



      foreach ($livraisons as $livraison):
        ?>
        <!-- liste des differentes commandes -->
        <?php $idcommande = $livraison -> id_commande; ?>
        <!-- liens qui envoient vers un resume de commande-->
        <a href="resume.php?numerodecommande= <?= $livraison -> id_commande ; ?>">commande no <?= $livraison -> id_commande ; ?></a> <br>

      <?php endforeach; ?>


    </div>
  </div>

</div>

</body>
<?php require '../includes/footer.php'; ?>