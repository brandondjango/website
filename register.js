(function($){

  $("#button").click(function(){
          $("#login").toggle();
      });

      $("#surprise").click(function(){
        var div = $("#surprise");
  div.animate({height: '300px', opacity: '0.4'}, "slow");
  div.animate({width: '300px', opacity: '0.8'}, "slow");
  div.animate({height: '100px', opacity: '0.4'}, "slow");
  div.animate({width: '100px', opacity: '0.8'}, "slow");
          });

  //link to google search
  $("#mainForm").submit(function(){
	//alert("form submit");
	var link = "https://www.google.com/#q=" + $("input").val();
	$("#mainForm").attr("action", link);
  });

  $("#lucky").click(function(){
          window.location.replace('https://www.google.com/#q=StayBeautifulMatt');
      });



})(jQuery);
