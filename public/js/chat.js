$('.likes-message').click(function(){
    var thumb = '<i class="far fa-thumbs-up"></i>';
    var single = ' aime ';
    var multiple= ' aiment ';
    var trigger = 'liked';
    var users = parseInt($(this).attr('data-likes')) + 1;

    if($(this).hasClass(trigger)){
        $(this).html(thumb + 'Liker');
        $(this).removeClass(trigger);
    }else{
        $(this).html(thumb + users  +  (users > 1 ? multiple : single) +  'ça');
        $(this).addClass(trigger);
    }
});