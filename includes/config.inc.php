<?php
$pagetitle = array(
    'title' => 'Rent a Pet Ltd.',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
	'title' => 'Simple Website',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Rent a Pet Ltd.'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
	'introduction' => array('file' => 'introduction', 'text' => 'Introduction'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery'),
    'prices' => array('file' => 'prices', 'text' => 'Prices'),
    'rent' => array('file' => 'rent', 'text' => 'Rent')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>