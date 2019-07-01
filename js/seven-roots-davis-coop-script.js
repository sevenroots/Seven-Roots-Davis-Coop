jQuery(document).ready(function($){

    $('#upload-whats-fresh-img-1, #upload-whats-fresh-img-2, #upload-whats-fresh-img-3').on ('click', upload_whats_fresh);
    function upload_whats_fresh(e){
        var mediaUploader;
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
        $initial_element = $(this);
        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $initial_element.next().val(attachment.url);
            $initial_element.next().next().html("File name: " + attachment.filename);
        });
        mediaUploader.open();
    };
});