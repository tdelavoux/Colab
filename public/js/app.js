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
                GESTION DES TOOLTIPS
############################################################### */
$('.left-bar-tooltips').tooltip({
    delay: {"show": 700, "hide" : 100},
    placement : 'right',
    trigger : 'hover'
});

/* ############################################################
                GESTION DES Textarea
############################################################### */
$('.limited-area').each(function(){
    var id =  Math.floor(Math.random() * 26) + Date.now() ;
    $(this).attr('data-id',  '#' + id);
    $(this).after('<span id="'+ id + '" class="small-text"></span>');
});
$('.limited-area').keyup(function(){
    var max = $(this).attr('maxlength') ? parseInt($(this).attr('maxlength')) : 500;
    $($(this).attr('data-id')).html((max - $(this).val().length) + ' caractères restants');
});
$('.limited-area').trigger('keyup');



/* ############################################################
                GESTION DES Color Picker
############################################################### */
function loadColors(){
    var res = null;
    $.ajax({
        url: config.routes.colors,
        'async': false,
        type:"get",
        success: function (result) {
            console.log("colorPicker has loaded");
           return result;
        }
    });
}

function initColorPickers(){
    // ---- Mise en place du color picker avec les données en BDD
    $(".color-picker").each(function(){
        var initialColor = $(this).attr('initialColor') ? $(this).attr('initialColor') : '#55efc4';
        $(this).colorPick({
            'palette': loadColors(),
            'initialColor' : initialColor,
            'onColorSelected': function() {
                this.element.css({'backgroundColor': this.color, 'color': this.color});
            },
            'paletteLabel': 'Colors'
        });
        $($(this).attr('data-target')).val(initialColor);
    });

    // Mise en input de la valeur Hexa de la couleur sélectionée
    $(".color-picker").click(function() {
        var target = $(this).attr('data-target');
        $(".colorPickButton").click(function() {
            $(target).val($(this).attr('hexvalue'));
        });
    });
}
initColorPickers();


