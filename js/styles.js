var rightKey, leftKey, topKey, bottomKey;

$(document).ready(function () {

    //Set up the triggers for the arrow keys
    $(document).keydown(function(e){
        if (e.keyCode == 37 && typeof leftKey === 'function') {
            leftKey();
        } else if(e.keyCode == 38 && typeof topKey === 'function') {
            topKey();
        } else if(e.keyCode == 39 && typeof rightKey === 'function') {
            rightKey();
        } else if(e.keyCode == 40 && typeof bottomKey === 'function') {
            bottomKey();
        }
    });


    parallax.add($("#index"))
        .add($("#me"));

    parallax.background = $("body");


    parallax.preload = function(){
        rightKey = leftKey = topKey = bottomKey = "";
        $(".control").hide();
    };

    parallax.index.onload = function(){
        setRight("me", "Me");
    };

    parallax.index.onload = function(){
        setLeft("index", "Home");
    }


});