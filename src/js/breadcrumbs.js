/**
 * Mobile breadcrumbs control
 *
 */

( function() {
	'use strict';

	window.addEventListener( 'load', initBreadcrumbs, false );

	function initBreadcrumbs() {
		const BC = {};

		BC.el = document.getElementById( 'breadcrumbs' );
		if ( null !== BC.el ) {
			mobileBreadcrumbs( BC );
		}
	}

	function mobileBreadcrumbs( BC ) {
		const div = {};

		BC.ol = BC.el.querySelector( 'ol' );
		BC.crumbs = BC.ol.querySelectorAll( 'li' );

		BC.el.classList.add( 'has-js' );

		div.el = document.createElement( 'div' );

		div.span = document.createElement( 'span' );
		div.span.innerHTML = BC.crumbs[ BC.crumbs.length - 2 ].querySelector( 'a' ).innerHTML;
		div.el.appendChild( div.span );

		// Put a space in between so that long names wrap correctly
		div.el.appendChild( document.createTextNode( ' ' ) );

		div.span = document.createElement( 'span' );
		div.span.innerHTML = BC.crumbs[ BC.crumbs.length - 1 ].innerHTML;
		div.el.appendChild( div.span );

		div.el.addEventListener( 'click', handleClick.bind( null, BC.el, 'active' ) );

		BC.el.insertBefore( div.el, BC.ol );
	}

	function handleClick( el, c ) {
		if ( el.classList.contains( c ) ) {
			el.classList.remove( c );
		} else {
			el.classList.add( c );
		}
	}
}() );
