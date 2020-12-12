$('.hidden-add-bookmark').click(function(){

    $(this).html('<span class="option-menu-list-item-link wiki-menu-list-item-link"><input class="form-conrol wiki-input" data-project-id="#'+ $(this).parent().attr('id') + '"></span>');
    $(this).removeClass('hidden-add-bookmark');
    $(this).unbind();

});

