$(document).ready(function(){
    
    $( "body" ).on("click", "button", function(){
        $.ajax({
            type: "POST",
            url: "/app_dev.php/posts/add",
            data: $( "form" ).serialize(),
            dataType: "json",
            success: function( response ){
                if( response.success ){
                    $( "input[type=text], textarea").val( "" );
                    $( "li.empty" ).remove();
                    $( "ul.comments-list" ).append( response.post );
                }else{
                    $( ".form-errors" ).html( response.error );
                }
            }
        });
        
        Recaptcha.reload();
        return false;
    });
    
    $( "body" ).on("click", "a.post-username-link", function(){
        if( $( "textarea" ).length > 0 ){
            $( "textarea" ).val( $( "textarea" ).val() + "@" + $( this ).text() + ", " );
            $('html, body').animate({
                scrollTop: $("textarea").offset().top
            }, 1000);
            $( "textarea" ).focus();
        }
        
        return false;
    });
    
    $('textarea').simplyCountable({
        counter:            '#counter',
        countType:          'characters',
        maxCount:           1000,
        strictMax:          true,
        countDirection:     'down'
    });
    
});