$('#btn-complete-name').keyup(function(){

    var route   = $(this).attr('data-route');
    var team = $(this).attr('data-team');

    if($(this).val().length >= 3){
        var pattern  = $(this).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            url: config.routes.searchUser,
            type:"post",
            data:{pattern:pattern},
            dataType: 'json',
            success: function (result) {
                var res = '';
                for (var user of result){
                    res += '<form action="'+ route + '" method="post">' +
                                '<input type="hidden" name="_token" value="' + $('input[name="_token"]').val() + '"/>' +
                                '<input type="hidden" name="fk_team" value="'+ team +'" />' +
                                '<input type="hidden" name="fk_user" value="'+  user.id +'" />' +
                                '<button  type="submit" class="btn-link user-chating btn-user">' +
                                    '<div class="rounded-circle profile-img-xs admin-target" style="background-image:url(\''+ user.pathFile + '\');background-position: center;background-repeat: no-repeat;background-size: cover;"></div>'+
                                    '<span class="team-user-name">'+ user.name + ' </span>' +
                                '</button>' +
                            '</form>';
                }
                $('#showUsers').html(res);
            }
        });
    }
    
});