jQuery(document).ready(function($){
    resize_whats_fresh();
    $(window).on('resize', function() { 
        resize_whats_fresh();
    });

    function resize_whats_fresh(){
        $('.whats-fresh-placehold').height($('.whats-fresh-placehold').width());
    }
});

