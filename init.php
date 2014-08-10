<?php

$GLOBALS[ 'config' ] = array(
    'db' => array( 'host' => '127.0.0.1',
                   'name' => 'my_db',
                   'user' => '',
                   'pass' => '' ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800 ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

$fn = function ( $class ) {
    require_once 'classes/' . $class . '.php';
};

spl_autoload_register( $fn );

require_once 'functions/sanitize.php';