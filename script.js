$(function(){
    $('#menu-button').click(function(){
        $('#nav').fadeIn('fast');
    });
    $('#close-btn').click(function(){
        $('#nav').fadeOut('fast');
    });
    $('#menu-button').click(function(){
        $('#navv').fadeIn('fast');
    });
    $('#close-btn').click(function(){
        $('#navv').fadeOut('fast');
    });
    
    $('.change-btn').click(function(){
        var $displaySlide = $('.active');

        $displaySlide.removeClass('active');
        if ($(this).hasClass('next-btn')){
            $displaySlide.next().addClass('active');
        }else{
            $displaySlide.prev().addClass('active');
        }

        var slideIndex = $('.slide').index($('.active'));
    
        $('.prev-btn').show();
        $('.next-btn').show();

        if (slideIndex == 0){
            $('.prev-btn').hide();
        }else if (slideIndex ==4){
            $('.next-btn').hide();
        }
    
        $('#a').click(function(){
            $('#nav').fadeOut();
        });
    
    });
    $('#form').submit(function(){
        var textvalue = $('#ans').val();
        var ans = "日本工学院八王子専門学校";
        if(textvalue == ans){
            $('.profile').css('display','block');
        }else{
            $('.batu').css('display','block');
        }
        return false;
    })
})
