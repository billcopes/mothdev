// add class toggled-on when menu-toggle fires @600 media query
$( function( ) {
	var nav = $( '#site-navigation' ), button, menu;
	if ( ! nav )
		return;
	button = nav.find( '.menu-toggle' );
	if ( ! button )
		return;
	// Hide button if menu is missing or empty.
	menu = nav.find( '.menu' );
	if ( ! menu || ! menu.children().length ) {
		button.hide();
		return;
	}
	$( '.menu-toggle' ).on( 'click.sheppco', function() {
		nav.toggleClass( 'toggled-on' );
	});
});



// Open and close sub-menu
$( function( ) {
		$( ".workhead , .workhead-m , .close-sub-menu" ).click(function() {
    $( ".sub-menu" ).slideToggle( "fast");
    $( ".menuarrow" ).toggleClass( "icon-m-top")
    $( ".menuarrow" ).toggleClass( "icon-m-down")
});});



// controls and loads/unloads headroom.js      || ( Modernizr.touch )
$(function() {
  if (Modernizr.mq('screen and (max-width:600px)') )  {
    header.destroy();
    } else {
    Modernizr.load([  {
      load: "js/headroom.min.js",
      callback : function() {
        var header = new Headroom(document.querySelector("#header"), {
          tolerance: 5,
          offset : 92,
          classes: {
            initial: "animated",
            pinned: "slideDown",
            unpinned: "slideUp"
          }
        });
        header.init();
        }
      }
    ]);
  }
});
