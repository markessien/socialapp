jQuery( function( $ ) {
  $( '#blog__subscribe' ).modal( 'show' )
  $( '.close-btn' ).on( 'click', function() {
    $( this ).parent().hide();
  } );
  $( '.blog__sidebar__toggle').on( 'click', function() {
    $( '.blog__sidebar').toggle();
  } );
} );
