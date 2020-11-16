<?php
$pagetitle = array(
    'title' => 'Simple Website Ltd.',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
	'title' => 'Simple Website',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Simple Website Ltd.'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
	'introduction' => array('file' => 'introduction', 'text' => 'Introduction'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
	'articles' => array('file' => 'articles', 'text' => 'Articles'),
    'table' => array('file' => 'table', 'text' => 'Table')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>