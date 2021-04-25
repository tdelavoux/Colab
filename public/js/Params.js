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

$('.changeVisibility').change(function(){
    var visibility      = $(this).val();
    var route           = $(this).attr('data-route');
    var fk_tableau      = $(this).attr('data-tableau');
    var fk_module       = $(this).attr('data-module');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: route,
        type:"post",
        data:{visibility:visibility, fk_module:fk_module, fk_tableau:fk_tableau},
        success: function (result) {
            if(result === 'OK'){
                $.notify('Visibilité mis à jour.', "success");
            }
        }
    });
});


