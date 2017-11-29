$('.sing-link').click(function(){

    if($('.register_container').hasClass('active')){

        $('.register_container').removeClass('active');
    }
    $('.login_container').addClass('active');
});





$('.signup-link').click(function(){
    if($('.login_container').hasClass('active')){

        $('.login_container').removeClass('active');
    }
    $('.register_container').addClass('active');
});
