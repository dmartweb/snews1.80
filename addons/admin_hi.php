<?php

/* EXAMPLE HOW TO USE ADDON AS A PUBLIC FUNCTION AND ADMIN FUNCTION */

// LANG
//addLang('wyname', 'What is your name');
$l['wyname'] = 'What is your name';
$l['focus'] = isset($l['focus']) ? $l['focus'].',hi' : ',hi';

function admin_hi() {
	echo 'Everything is fine. Cool';
}

function public_hi() {
	if ($_POST) {
		if ($_POST['name']) {echo '<h1>Hello '.clean($_POST['name']).'</h1>';}
	} else {
		echo '<h2>Hello world</h2>';
		echo html_input('form', '', 'post', '', '', '', '', '', '', '', '', '', 'post', _SITE.'hi', '')."\r\n";
		echo html_input('text', 'name', 'name', '', '* '.l('wyname'), 'text', '', '', '', '', '', '', '', '', '')."\r\n";
		echo html_input('hidden', 'addon', 'addon', 'hi', '', '', '', '', '', '', '', '', '', '', '');
		echo html_input('submit', 'submit', 'submit', l('submit'), '', 'button', '', '', '', '', '', '', '', '', '')."\r\n";
	}
	
}


// http://localhost/snews1.80/hi/
// http://localhost/snews1.80/?action=admin_hi

?>