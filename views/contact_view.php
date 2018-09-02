<?php $title = 'Contactez-Nous'; ?>

<?php require '../includes/head.php' ?>
<link rel="stylesheet" href="../css/stylecontact.css">
<link rel="stylesheet" href="../css/responsive-contact.css">

<body>
    <div class="entete">
        <?php require '../includes/navbar.php' ; ?>
        
        <img src="../assets/img_contact/bgcontact.jpg" alt="background-contact" class="backgroundcontact">
        
        <div class="textecontact">
            
            <p class="suggestion">Une suggestion ?</p> 
            <p class="commande">Une commande spéciale ?</p>
            <p class="contactez">Contactez-nous ! </p>
            
        </div>
    </div>
    <div class="formcontact">
        <p class="barre">_________________________________________________</p>
        <div id="barre"></div> <div id="barre"></div>
        <div class="textsouligne" >
            <p class="textform">FORMULAIRE DE CONTACT</p>
            <p class="barre2">____________________</p>
        </div>
        
        
        <div class="form">
            <form action="mailto:san@antonio.net" method="post" enctype="text/plain">
             
                <input type="text" name="firstname" placeholder=" Votre nom" class="votrenom"><br>
                
                <input type="text" name="lastname" placeholder=" Votre E-mail" class="votremail"><br>
                
                <input type="text" name="msg" placeholder=" Votre message" class="message">
            </form>
            
            <input type="submit" name="Envoyer" value="Envoyer" class="boutonenvoyer">
        </form>
    </div>
    
    <div class="reseauxsociaux text-center"> 
        
        <a href="" target="_blank" class="twitter"><img src="../assets/img_contact/twitter.png" alt="twitter" class="twitter"></a>
        <a href="" target="_blank" class="facebook"><img src="../assets/img_contact/facebook.png" alt="facebook" class="facebook"></a>
        <a href="" target="_blank" class="instagram"><img src="../assets/img_contact/instagram.png" alt="instagram" class="instagram"></a>
        
        
    </div>
</div>

</body>
<br>
<br>
<?php require '../includes/footer.php'; ?>
</html>