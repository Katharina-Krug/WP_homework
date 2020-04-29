<?php
$pagetitle = array(
    'title' => 'Internationaler Bund',
);

$header = array(
  'imagesource' => 'ib_main_portal_logo.svg',
    'imagealt' => 'logo',
	'title' => 'International Bund',
    'motto' => 'Strengthening Being Human',
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'The International Bund'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
    'dc' => array('file' => 'development', 'text' => 'Development Cooperation'),
    'ims' => array('file' => 'ims', 'text' => 'International Migration Services'),
    'iyw' => array('file' => 'iyw', 'text' => 'International Youth Work'),
    'ina' => array('file' => 'ina', 'text' => 'International Networks and Alliances'),
    'vs' => array('file' => 'vs', 'text' => 'Voluntary Services'),
    'contactform' => array('file' => 'contactform','text' => 'Contact form')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>