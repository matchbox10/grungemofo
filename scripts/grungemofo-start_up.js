// JavaScript Document

function on_before() {
	console.log('before');
	jQuery('.cycle-title').fadeOut(500);
}

function on_after() {
	console.log('after');
	jQuery('.cycle-title').fadeIn(500);
}

// jcycle instantiate
function start_cycle() {
	jQuery('.jheader .view-content').cycle({ 
    fx:    'scrollDown', 
    speed:  2500,
	before:	on_before,
	after: on_after
 });
}



jQuery(document).ready(function() {
	
	start_cycle();

});