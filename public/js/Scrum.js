/* -------- Gestion de l'input de création d'une ligne de sprint -----------*/
function initListeners(){

    /* Reinitialiser les listeners */
    $('.inputAddTaskInput').unbind();
    $('.inputAddTaskInput').unbind();
    $('.addSprint').unbind();
    $('.editable-component').unbind();
    $('.scrum-option-column').unbind();
    $('.deleteScrumLine').unbind();

    $('.inputAddTaskInput').focusout(function(){
        if($(this).val()){
            var self = $(this);
            var rows = $(this).parent().parent();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                url: $(this).attr('data-target'),
                type:"post",
                //data:{id:'testouille'},
                success: function (result) {
                    rows.before(result);
                    self.val('');
                }
            }); 
        } 
    });
    $('.inputAddTaskInput').keyup(function(event) {
        if (event.keyCode === 13) {
            $(this).blur();
            $(this).val('');
        }
    });

    $('.addSprint').click(function(){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: $(this).attr('data-target'),
            type:"post",
            //data:{id:'testouille'},
            success: function (result) {
                $('#sprints-collum').prepend(result);
            }
        }); 
    });

    $('.editable-component').click(function(){

        var content = $(this);
        var input = $("<input />");
        input.addClass('number-component');
        input.attr('type', 'number');
        input.val(content.find(">:first-child").text());
        content.html(input);
        input.focus();
    
        content.has("input").css('border', 'none');
    
        input.focusout(function(){
            var contentVal = $('<span class="numeric-value intval_12_14">' + $(this).val() + '</span><span class="metric-unit">Heures</span>');
            content.html(contentVal);
            content.removeAttr('style');
            calcResColumns();
        });
    });

    $('.scrum-option-column').click(function(){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $('.' + $(this).attr('column-target')).hide();
        }else{
            $(this).addClass('active');
            $('.' + $(this).attr('column-target')).show();
        }
    });

    $('.deleteScrumLine').click(function(){
        // TODO supprimer en BDD
        $($(this).attr('data-line-target')).detach();
    })

    $('.datepicker').datepicker();
    
}
initListeners();


/* ---------- Calcul des sommes de INT en bas de colones ------------------ */
function calcResColumns(){
    $('.total-int').each(function(){
        var sum = 0;
        $('.intval_12_14').each(function(){ sum += parseFloat($(this).text());});
        $(this).html(sum);
    });
}
calcResColumns();
