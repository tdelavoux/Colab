$('#param-product-owner').click(function(){

    // TODO alimenter via fetch le contenu de la modale avec les amdins du projet

    // A la selection du nouveau on remplace l'original 
    $('.admin-project').click(function(){
        $('#param-product-owner').html($(this).html());
        $('#param-product-owner').removeClass('admin-project');
    });


});

