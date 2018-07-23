
<?php require 'head.php' ?>

<body>

    <!-- Ligne bootstrap (row) -->
    <div class="row">

        <!-- Colonne de gauche --> 
        <div class="col-xl-5 fromage-simplon">

            <div class="texteaccueil text-center">

                <!--si une session est ouverte -->

                <?php if(isset($_SESSION['id'])){ ?>
                    <h3 style="color:white">Bienvenue: <span class="connecte" style="color:yellow"><?php echo $_SESSION['nom']; ?><a href="profil.php">(profil)</a></span></h3> 

                <?php } ?>

                <h1 class="fromagerie ">Fromagerie Simplon</h1>
                <h5 class="simplon ">Vente de fromages européens</h5>

                <p class="boutonentrertexte">
                   <a class="boutonentrer" href="#">Commencer</a>
               </p>
           </div>
       </div>


       <!-- Colonne de droite -->  
       <div class="col-xl-7">

        <div class="imgaccueil">

            <!-- Navbar --> 


            <!-- appel de la navbar.php -->
           <?php require 'navbar.php' ?>

           <!-- Image de droite -->              
           <img src="../assets/img_accueil/background1.jpg" alt="backgroundimage" class="imageaccueil img-fluid"> <!-- "img-fluid" propriete bootstrap qui rend l'image responsive --> 

       </div>
   </div>


</div>

</body>
