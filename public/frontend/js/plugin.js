$(document).ready(function (){
    $('.required').focus(function (){
        $(this).animate({
            paddingLeft:'-10px',
            fontSize : '1.25rem'
        });
    });

    $('.required').blur(function (){
        if($(this).val() == ''){
            $(this).attr('placeholder','This field is required');
            $('input::placeholder').addClass('placeholder')
        }else{
            $(this).animate({
                paddingLeft:'10px',
                fontSize : '1rem'
            });
        }
    });
});