$('.likes-message').click(function(){

    var sens = true;
    if($(this).attr('data-self') === 'true'){
        sens = false;
    }

    var myself = $(this);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: myself.attr('data-route'),
        type:"post",
        data:{fkId: myself.attr('data-id'), action : sens},
        success: function (result) {
            
            if(result === 'OK'){
                if(myself.attr('data-self') === 'true'){
                    myself.attr('data-self' , false);
                    myself.attr('data-count' , (parseInt(myself.attr('data-count')) - 1));
                    myself.html('<i class="far fa-thumbs-up"></i>J\'aime');
                    
                }else{
                    myself.attr('data-self' , true);
                    myself.attr('data-count' , (parseInt(myself.attr('data-count')) + 1));
                    myself.html('<i class="far fa-thumbs-up"></i>Je n\'aime plus');
                }
    
                if(parseInt(myself.attr('data-count')) > 0 ){
                    $(myself.attr('data-target')).html('<i class="fas fa-heart"></i>' + myself.attr('data-count') + ' personne(s) aime(nt) ça')
                }else{
                    $( myself.attr('data-target')).html('soyez le premier à liker')
                }
            }
            
        }
    });

});