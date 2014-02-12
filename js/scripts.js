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

    $('#address').change(function(e){
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

    $('#body, #subject').change(function(e){
        if($(this).val() == "")
        {
            $(this).parent().removeClass("has-success").addClass("has-error");
            subject = false;
            body = false;
        }
        else
        {
            $(this).parent().removeClass("has-error").addClass("has-success");
            subject = true;
            body = true
        }
    });

    $('#email').submit(function(e){
        e.preventDefault();
        // Sending
        if(address && subject && body)
        {
            var data = $(this).serialize();
            $.post('mail.php', data);
            $(this).remove();

            $('.alert').addClass("alert-success").show(function(){
                $(this).html("Message envoyé avec succès.");
            });
        }
        // Not sending
        else
        {
            $('.alert').addClass("alert-danger").show(function(){
                $(this).html("Erreur lors de l'envoit du message.");
            });
        }
    });

    $('.project').hover(function(){
        $(this).fadeTo("fast", 1).mouseleave(function(){
            $(this).stop(true).fadeTo(("fast"), 0.5);
        })
    })
});

