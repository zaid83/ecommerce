

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleacceuil.css">
   <link rel="stylesheet" type="text/css" href="../css/responsive-accueil.css">
   <link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/stylecontact.css">
<link rel="stylesheet" href="../css/responsive-contact.css">
<link rel="stylesheet" href="../css/panier.css">
<link rel="stylesheet" href="multiforms.css">


    <body>
<div class="entete">
<?php require 'navbar.php' ; ?>
        
        <img src="../assets/img_contact/bgcontact.jpg" alt="background-contact" class="backgroundcontact">
        

          </div>
<div class="formcontact">
                <p class="barre">_________________________________________________</p>
                <div id="barre"></div> <div id="barre"></div>
                <div class="textsouligne" >
                <p class="textform">COMMANDE</p>
                <p class="barre2">_____________</p>
            </div>

<!-- multistep form -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active"></li>
        <li></li>
        <li></li>
    </ul>








    <!-- fieldsets -->
    <fieldset>
        <h1 class="fs-title"> Votre Panier </h1>
        <br>
        <br>
 <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>Image du produit</td>
                <td>Nom</td>
                <td>Provenance</td>
                <td>Quantite</td>
                <td>Prix</td>   
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://www.graindorge.fr/wp-content/uploads/2016/01/camembert1.png" width="100"></td>
                <td>Camembert</td>
                <td>France</td>
                <td>3</td>
                <td>19,00€</td>
            </tr>
                        <tr>
                <td><img src="https://www.graindorge.fr/wp-content/uploads/2016/01/camembert1.png" width="100"></td>
                <td>Camembert</td>
                <td>France</td>
                <td>3</td>
                <td>19,00€</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="total">TOTAL</td>
            </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="prixht">38,00€</td>
            </tr>
        </tbody>
    </table>
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>















    <fieldset>
        <h2 class="fs-title">Livraison</h2>
             <div class="form-group">
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre Adresse">
  </div>
<div class="form-group">
    <input type="text" class="form-control" id="codepostal" name="codepostal" placeholder="Votre Code Postal">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre Ville">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Votre Telephone">
  </div>
   
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>

























    <fieldset>
        <h1 class="fs-title"> Resume de commandes </h1>
        <br>
        <br>


<table>
       <tr>
        <td class="label">ADRESSE: </td>
         <td>Rue Jean Coqueteau</td>
       </tr>
       <tr>
        <td class="label">CP: </td>
         <td>13048</td>
       </tr>
        <tr>
            <td class="label">VILLE: </td>
            <td>Marseille</td>
        </tr>
           <tr>
            <td class="label">TEL: </td>
            <td>0648975782</td>
        </tr>

</table>

<br>
<br>

 <table class="table table-striped text-center">
        <thead>
            <tr>
                <td>Image du produit</td>
                <td>Nom</td>
                <td>Provenance</td>
                <td>Quantite</td>
                <td>Prix</td>   
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://www.graindorge.fr/wp-content/uploads/2016/01/camembert1.png" width="100"></td>
                <td>Camembert</td>
                <td>France</td>
                <td>3</td>
                <td>19 €</td>
            </tr>
                        <tr>
                <td><img src="https://www.graindorge.fr/wp-content/uploads/2016/01/camembert1.png" width="100"></td>
                <td>Camembert</td>
                <td>France</td>
                <td>3</td>
                <td>19 €</td>
            </tr>
        </tbody>
    </table>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" class="next action-button" id="validcommande" name="formcommande" placeholder="ValiderCommande" >
    </fieldset>
    
        
</form>


                    </div>
        <!-- jQuery -->

<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" type="text/javascript"></script>

<script src="multiforms.js"></script>
     </body>
</html>