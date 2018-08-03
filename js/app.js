(function($){
   // au click du bouton ajouter au panier un evenement se declenche
	$('.addPanier').click(function(event){
		event.preventDefault();

		//utilisation de ajax avec get et on recupere le lien du bouton clique
		// le {}indique l'objet a recuperer mais deja preciser dans le lien
		// puis en 3eme parametre la fonction utiliser pour recuperer les donnees
		// json c'est le format utilise
		$.get($(this).attr('href'),{},function(data){

			// si erreur dans le json afficher un message 
            if(data.error){
            	alert('data.message');

            }else{
            	
            	//injecte le nb de produite directement dans le logo panier
            	$('#count').empty().append(data.count);
            }
		},'json');
	
		return false;
		
	});

})(jQuery);