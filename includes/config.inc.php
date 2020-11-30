<?php
$pagetitle = array(
    'title' => 'Rent a Pet Ltd.',
);

$header = array(
    'imagesource' => 'logo.png',
    'imagealt' => 'logo',
	'title' => 'Rent a Pet',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Rent a Pet Ltd.'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
	'contact' => array('file' => 'contact', 'text' => 'Contact'),
    'gallery' => array('file' => 'gallery', 'text' => 'Gallery'),
    'prices' => array('file' => 'prices', 'text' => 'Prices'),
    'rent' => array('file' => 'rent', 'text' => 'Rent')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');


    $FOLDER = './images/gallery/';
    $TYPES = array ('.jpg', '.png');
    $MEDIATYPES = array('image/jpeg', 'image/png');
    $DATEFORMAT = "m/d/Y H:i";
    $MAXSIZE = 500*1024;
?>