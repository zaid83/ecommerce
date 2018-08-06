    <?php session_start();
    require_once "models/db.class.php";
    $BDD = new BDD();
    ?>
    <html>
    <head>

       <meta charset="utf-8">

       <meta name="viewport" content="">

       <!--Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

       <!-- Les liens CSS -->
       <link rel="stylesheet" type="text/css" href="css/styleacceuil.css">
       <link rel="stylesheet" type="text/css" href="css/responsive-accueil.css">
       <link rel="stylesheet" href="css/animate.css">

       <!-- Les polices de texte -->
       <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Cinzel|Noticia+Text" rel="stylesheet">

       <!-- Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

       <script src="js/wow.min.js"></script>
                  <script>
                  new WOW().init();
                  </script>

    </head>
    <body>

        <!-- Ligne bootstrap (row) -->
        <div class="row">

            <!-- Colonne de gauche -->
            <div class="col-xl-5 fromage-simplon">

                <div class="texteaccueil text-center">

                    <!--si une session est ouverte -->

                    <?php if(isset($_SESSION['id'])){ ?>
                        <h3 style="color:white">Bienvenue: <span class="connecte" style="color:yellow"><?php echo $_SESSION['nom']; ?><a href="views/profil_view.php">(profil)</a></span></h3>

                    <?php } ?>

                    <h1 class="fromagerie wow slideInLeft">Fromagerie Simplon</h1>
                    <h5 class="simplon wow bounceInUp">Vente de fromages européens</h5>

                    <p class="boutonentrertexte ">
                       <a class="boutonentrer" href="views/pagefromages_view.php">Commencer</a>
                   </p>
               </div>
           </div>


           <!-- Colonne de droite -->
           <div class="col-xl-7">

            <div class="imgaccueil">

                <!-- Navbar -->


                <!-- appel de la navbar.php -->
                              <!--si il n' ya pas de session ouverte -->

                    <?php if(!isset($_SESSION['id'])){ ?>

                <div class="navbaraccueil wow slideInRight">

                   <a href="views/contact_view.php">CONTACT</a>
                   <a href="views/connexion_view.php">CONNEXION</a>
                   <a href="views/inscription_view.php">INSCRIPTION</a>
                   <a href="views/pagefromages_view.php">FROMAGES</a>
                   <a href="views/produits_view.php">PRODUITS</a>
                   <a href="views/index_view.php">ACCUEIL</a>

               </div>

    <!--si il  y a une session ouverte -->
               <?php
           }

                else { ?>

               <div class="navbaraccueil wow slideInRight">

                   <a href="views/contact_view.php">CONTACT</a>
                   <a href="views/deconnexion.php">DECONNEXION</a>
                   <a href="views/panier.php">PANIER</a>
                   <a href="views/pagefromages_view.php">FROMAGES</a>
                   <a href="views/produits_view.php">PRODUITS</a>
                   <a href="views/index_view.php">ACCUEIL</a>

               </div>


             <?php   } ?>

               <!-- Image de droite -->
               <img src="assets/img_accueil/background1.jpg" alt="background image daccueil" class="imageaccueil img-fluid"> <!-- "img-fluid" propriete bootstrap qui rend l'image responsive -->

           </div>
       </div>


    </div>

    </body>
