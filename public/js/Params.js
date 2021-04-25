$('#param-product-owner').click(function(){

    // TODO alimenter via fetch le contenu de la modale avec les amdins du projet

    // A la selection du nouveau on remplace l'original 
    $('.admin-project').click(function(){
        $('#param-product-owner').html($(this).html());
        $('#param-product-owner').removeClass('admin-project');
    });

});

$('.changeAccess').change(function(){
    var access          = $(this).val();
    var route           = $(this).attr('data-route');
    var fk_team_project = $(this).attr('data-team');
    var fk_tableau      = $(this).attr('data-tableau');
    console.log(route);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: route,
        type:"post",
        data:{access:access, fk_team_project:fk_team_project, fk_tableau:fk_tableau},
        success: function (result) {
            if(result === 'OK'){
                $.notify('Accès mis à jour.', "success");
            }
        }
    });
});


