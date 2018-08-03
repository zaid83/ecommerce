$.(document).ready(function(){


    /*

     * Utilisons $.ajax pour créer une instance de XmlHttpRequest

     */
$("#Portugal").click(function(){
    

    $.ajax();
           url : '../views/pagefromages_view.php' // La ressource ciblée
                  type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){ // success est toujours en place, bien sûr !
      $(code_html).appendTo("#commentaires"); // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       error : function(resultat, statut, erreur){
         
       },

       complete : function(resultat, statut){

       }

    });

});