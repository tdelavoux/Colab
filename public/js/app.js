
/* Gestion des DatePiskers*/
$('.datepicker').datepicker({autoclose: true});

/* ############################################################
                GESTION DES POPOVERS
############################################################### */

$('.statusSelector[data-toggle="popover"]').popover({
    placement: 'bottom',
    content: typeof statusPopoverContent != 'undefined' ? statusPopoverContent : '',
    sanitize:false,
    html: true
});


// Application de la sélection du picker personnalisé (status et priority)
$('.tdSelector').click(function(){
    var selector = $(this);
    $('.BtnSelector').click(function(){
    // -------------> Modifications Visuelles
    selector.html($(this).text());
    selector.css('backgroundColor', $(this).css('backgroundColor'));
    selector.popover('hide');
    });
});

/** --------------------- Fermeture du popover quand on clique en dehors */
$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});



/* ############################################################
                GESTION DES COLLAPS
############################################################### */

$('.faders').click(function(){
    if($('#' + $(this).attr('data-target')).hasClass('show')){
        $('#' + $(this).attr('data-target')).hide(400);
        $('#' + $(this).attr('data-target')).removeClass('show');
        $(this).addClass('fa-chevron-circle-down');
        $(this).removeClass('fa-chevron-circle-right');
    }else{
        $('#' + $(this).attr('data-target')).show(400);
        $('#' + $(this).attr('data-target')).addClass('show');
        $(this).removeClass('fa-chevron-circle-down');
        $(this).addClass('fa-chevron-circle-right');
    }
});