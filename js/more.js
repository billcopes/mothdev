$( function( ) {
  $('.more').click(function () {
  	if ($(".extra").is(":hidden")){
      $(".extra").slideDown("Slow");
			$(".read-more").hide();
			$(".read-less").show().css("display", "inline-block");
    } else {
      $(".extra").slideUp("Slow");
			$(".read-more").show().css("display", "inline-block");
			$(".read-less").hide();
  	}
  });
});
