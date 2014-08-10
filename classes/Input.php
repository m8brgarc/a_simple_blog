<?php

class Input {
    public static function exists( $type = 'post' ) {
        switch ( strtolower( $type ) ) {
            case 'post':
                return ( !empty( $_POST ) ) ? true : false;
                break;
            case 'get':
                return ( !empty( $_GET ) ) ? true : false;
                break;
            default:
                return false;
                break;
        }
    }

    public static function get( $item, $dataType = 'str' ) {
        if ( isset( $_POST[ $item ] ) ) {
            $rtn_item = $_POST[ $item ];
        } elseif ( isset( $_GET[ $item ] ) ) {
            $rtn_item = $_GET[ $item ];
        } else {
            $rtn_item = '';
        }

        if ( !empty( $rtn_item ) ) {
            switch ( strtolower( $dataType ) ) {
                case 'int':
                    $rtn_item = intval( $rtn_item );
                    break;
                case 'flt':
                    $rtn_item = floatval( $rtn_item );
                    break;
                case 'dbl':
                    $rtn_item = doubleval( $rtn_item );
                    break;
                case 'str':
                    $rtn_item = strval( trim( $rtn_item ) );
                    break;
                default:
                    break;
            }
        }

        return $rtn_item;
    }
}