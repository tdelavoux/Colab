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
    var fk_board        = $(this).attr('data-board');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: route,
        type:"post",
        data:{access:access, fk_team_project:fk_team_project, fk_board:fk_board},
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
    var fk_board        = $(this).attr('data-board');
    var fk_module       = $(this).attr('data-module');
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: route,
        type:"post",
        data:{visibility:visibility, fk_module:fk_module, fk_board:fk_board},
        success: function (result) {
            if(result === 'OK'){
                (parseInt(visibility) === 1) ? $('#module'+ fk_module).show() : $('#module'+ fk_module).hide();            
                $.notify('Visibilité mis à jour.', "success");
            }
        }
    });
});

$('.changeHabilitation').change(function(){
    var habilitation    = $(this).val();
    var route           = $(this).attr('data-route');
    var fk_ma           = $(this).attr('data-ma');
    var fk_team         = $(this).attr('data-team');
    console.log(route);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: route,
        type:"post",
        data:{habilitation:habilitation, fk_ma:fk_ma, fk_team:fk_team},
        success: function (result) {
            if(result === 'OK'){           
                $.notify('HAbilitation mis à jour.', "success");
            }
        }
    });
});


