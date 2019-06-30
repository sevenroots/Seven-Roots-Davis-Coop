jQuery(document).ready(function($){
    var mediaUploader;
    $('#upload-button').on('click', function(e){
        e.preventDefault();
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Picture',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        });
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#whats-fresh-img-1').val(attachment.url);
        });
        mediaUploader.open();
    });
});