
<?php require 'head.php' ?>

<?php require '../controller/add_inscription.php' ?>

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

        <?php require 'navbar.php' ?>
       
        <h2>Mon Profil</h2>

      <img src="<?php echo $_SESSION['img']; ?>" width="250" height="250">

      <br>
      <br>
      <br>

<table class="table">
         <tr>
        <td class="label">NOM: </td>
         <td><?php echo $_SESSION['nom']; ?></td>
       </tr>
       <tr>
        <td class="label">PRENOM: </td>
         <td><?php echo $_SESSION['prenom']; ?></td>
       </tr>
       <tr>
        <td class="label">EMAIL: </td>
         <td><?php echo $_SESSION['mail']; ?></td>
       </tr>
       <tr>
        <td class="label">ADRESSE: </td>
         <td><?php echo $_SESSION['adresse']; ?></td>
       </tr>
       <tr>
        <td class="label">CP: </td>
         <td><?php echo $_SESSION['cp']; ?></td>
       </tr>
        <tr>
            <td class="label">VILLE: </td>
            <td><?php echo $_SESSION['ville']; ?></td>
        </tr>
           <tr>
            <td class="label">TEL: </td>
            <td><?php echo $_SESSION['telephone']; ?></td>
        </tr>

</table>
      








    </div>
  </div>

</div>

</body>
