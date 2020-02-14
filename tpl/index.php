<?php

// include
require_once("vendor/autoload.php"); //para buscar automaticamente qualquer Classe dentro de vendor/ quando necessário

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/", //o diretório que está dentro
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);

Tpl::configure( $config );


// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign( "name", "Samuel" );
$tpl->assign("version", PHP_VERSION);


// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" ); //desenha o HTML. OBS: por padrão já procura arquivo com .html


?>