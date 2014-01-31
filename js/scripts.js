$( document ).ready(function() {

    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop != 0)
            $('.navbar').stop().animate({'opacity':'0.2'},400);
        else
            $('.navbar').stop().animate({'opacity':'1'},400);
    });

    $('.navbar').hover(
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('.navbar').stop().animate({'opacity':'1'},400);
            }
        },
        function (e) {
            var scrollTop = $(window).scrollTop();
            if(scrollTop != 0){
                $('.navbar').stop().animate({'opacity':'0.2'},400);
            }
        }
    );

    // Form validation.


    var address = false, subject = false, body = false;

    $('#address').focusout(function(e){
        var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        if($(this).val().match(pattern))
        {
            $(this).parent().removeClass("has-error").addClass("has-success");
            address = true;
        }
        else
        {
            $(this).parent().removeClass("has-success").addClass("has-error");
            address=false;
        }
    });

    $('#subject').focusout(function(e){
        if($(this).val() == "")
        {
            $(this).parent().removeClass("has-success").addClass("has-error");
            subject = false;
        }
        else
        {
            $(this).parent().removeClass("has-error").addClass("has-success");
            subject = true;
        }
    });

    $('#body').focusout(function(e){
        if($(this).val() == "")
        {
            $(this).parent().removeClass("has-success").addClass("has-error");
            body = false;
        }
        else
        {
            $(this).parent().removeClass("has-error").addClass("has-success");
            body = true
        }
    });

    $('#email').submit(function(e){
        e.preventDefault();
        if(address && subject && body)
        {
            var data = $(this).serialize();
            $.post('mail.php', data)
            $(this).hide();
        }
        else
        {
            console.log("not good email matching");
        }
    });

});

