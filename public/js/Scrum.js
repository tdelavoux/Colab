$('.scrum-option-column').click(function(){
    if($(this).hasClass('active')){
        $(this).removeClass('active');
        $('.' + $(this).attr('column-target')).hide();
    }else{
        $(this).addClass('active');
        $('.' + $(this).attr('column-target')).show();
    }
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

function addSprint(){
    // Ajax - faire l'ajout en BDD et si  tout c'est bien passé, retourner le contenu d'une partial avec un sprint vide
}

$('.inputAddTaskInput').focusout(function(){
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
            console.log(result);
        }
    });  
});

function calcResColumns(){
    $('.total-int').each(function(){
        var sum = 0;
        $('.intval_12_14').each(function(){
            
            sum += parseFloat($(this).text());
            console.log(parseFloat($(this).text()));
        });
        $(this).html(sum);
    });
}
