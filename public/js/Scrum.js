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
        var contentVal = $('<span class="numeric-value">' + $(this).val() + '</span><span class="metric-unit">Heures</span>');
        content.html(contentVal);
        content.removeAttr('style');
    });
});