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


$('.imagePickerAdd').click(function(){
    var id_img="img_listener" +  Math.floor(Math.random() * 26) + Date.now();
    var id_input="input_img" +  Math.floor(Math.random() * 20) + Date.now();
    $('#img-picker-row').append('<div class="form-group col-sm-2">'+ 
                                    '<div class="img-picker" id="'+ id_img +'"></div>'+
                                    '<div id="'+ id_input +'" style="display:none;"></div>'+
                                '</div>');
    addImgListener();
    $('#'+id_img).imagePicker({name: id_img, id_input : id_input});
});


function addImgListener(){
    
    (function ( $ ) {

    
        $.fn.imagePicker = function( options ) {

            // Define plugin options
            var settings = $.extend({
                // Input name attribute
                name: "testImg",
                // Classes for styling the input
                class: "form-control btn btn-default btn-block",
                // Icon which displays in center of input
                icon: "fas fa-plus"
            }, options );

            // Create an input inside each matched element
            return this.each(function() {
                $(this).html(create_btn(this, settings));
            });

        };

        // Private function for creating the input element
        function create_btn(that, settings) {
            // The input icon element
            var picker_btn_icon = $('<i class="'+settings.icon+'"></i>');

            // The actual file input which stays hidden
            var picker_btn_input = $('<input id="fileUpload" type="file" accept=".gif,.jpg,.png,.jpeg" name="'+settings.name+'" />');

            // The actual element displayed
            var picker_btn = $('<div class="'+settings.class+' img-upload-btn"></div>')
                .append(picker_btn_icon)
                .append(picker_btn_input);

            // File load listener
            picker_btn_input.change(function() {
                $('#' + settings.id_input).html($(this));
                if ($(this).prop('files')[0]) {
                    // Use FileReader to get file
                    var reader = new FileReader();

                    // Create a preview once image has loaded
                    reader.onload = function(e) { 
                        var preview = create_preview(that, e.target.result, settings);
                        $(that).html(preview);
                    }

                    // Load image
                    reader.readAsDataURL(picker_btn_input.prop('files')[0]);
                }                
            });

            return picker_btn
        };

        // Private function for creating a preview element
        function create_preview(that, src, settings) {
                
                // The preview image
                var picker_preview_image = $('<div class="profile-img-sm" style="background-image:url('+src+');">');

                // The remove image button
                var picker_preview_remove = $('<button class="btn btn-link"><small>Remove</small></button>');

                // The preview element
                var picker_preview = $('<div class="text-center"></div>')
                    .append(picker_preview_image)
                    .append(picker_preview_remove);

                // Remove image listener
                picker_preview_remove.click(function() {
                    $(this).parent().parent().parent().detach();
                });

                return picker_preview;
        };

    }( jQuery ));

}

$('.documentAdder').click(function(){
    var id_file="file_listener" +  Math.floor(Math.random() * 26) + Date.now();
    var id_input="input_file" +  Math.floor(Math.random() * 20) + Date.now();
    $('#document-picker-row').append('<div class="form-group col-sm-3 file-row">'+ 
                                    '<div class="file-pickr" id="'+ id_file +'"></div>'+
                                    '<div id="'+ id_input +'" style="display:none;"></div>'+
                                '</div>');
    addFileListener();
    $('#'+id_file).filePicker({name: id_file, id_input : id_input});
});


function addFileListener(){
    
    (function ( $ ) {

    
        $.fn.filePicker = function( options ) {

            // Define plugin options
            var settings = $.extend({
                // Input name attribute
                name: "testfile",
                // Classes for styling the input
                class: "form-control btn btn-info"
            }, options );

            // Create an input inside each matched element
            return this.each(function() {
                $(this).html(create_btn(this, settings));
            });

        };

        // Private function for creating the input element
        function create_btn(that, settings) {

            // The actual file input which stays hidden
            var picker_btn_input = $('<input id="fileUpload" type="file" accept=".doc,.docx,.pdf,.xls,.xlsx, .mp3, .wave, .aiff, .zip, .7z, .tar.gz" name="'+settings.name+'" />');

            // The actual element displayed
            var picker_btn = $('<div class="'+settings.class+' file-upload-btn"><i class="fas fa-cloud-upload-alt"></i> Charger un fichier</div>')
                .append(picker_btn_input);

            // File load listener
            picker_btn_input.change(function() {
                $('#' + settings.id_input).html($(this));
                if ($(this).prop('files')[0]) {
                    var preview = create_preview(that, $(this).prop('files')[0].name, settings);
                    $(that).html(preview);
                }                
            });
            return picker_btn
        };

        // Private function for creating a preview element
        function create_preview(that, src, settings) {
            // The preview image
            var picker_preview_file = $('<div class="file-name-display"><i class="fas fa-file-upload"></i>'+src+'</div>');

            // The remove image button
            var picker_preview_remove = $('<button class="btn btn-default file-name-remove"><small><i class="fas fa-times"></i></small></button>');

            // The preview element
            var picker_preview = $('<div class="flexy mt-05"></div>')
                .append(picker_preview_file)
                .append(picker_preview_remove);

            // Remove image listener
            picker_preview_remove.click(function() {
                $(this).parent().parent().parent().detach();
            });
            return picker_preview;
        };

    }( jQuery ));

}