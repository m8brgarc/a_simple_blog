<?php

class Redirect {
    public static function to( $location = null ) {
        if ( !empty( $location ) ) {
            header( 'Location: ' . $location );
            exit();
        }
    }
}