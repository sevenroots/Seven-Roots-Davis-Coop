jQuery(document).ready(function($){
    $('[id^="upload-whats-fresh-img"], [id^="upload-carousel-img"]').on ('click', upload_whats_fresh);
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
            $initial_element.next().next().html(" " + attachment.filename);
        });
        mediaUploader.open();
    };
    $(window).on('resize', function() { 
        $('.whats-fresh-placehold').height($('.whats-fresh-placehold').width());
    });
});

