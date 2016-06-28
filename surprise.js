$(document).ready(function(){
    $("button").click(function(){
        var div = $("div");
        div.animate({height: '400px'}, "slow");
        div.animate({left: '250px'});
        });
});
