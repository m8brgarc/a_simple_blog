<?php

class Hash {
    public static function make( $string, $salt = '' ) {
        return hash( 'sha256', $string . $salt );
    }

    public static function salt( $length = 32 ) {
        $rtn_string = '';
        $arr = explode( ',', 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0,1,2,3,4,5,6,7,8,9,-,_' );
        for ( $i = 0; $i < $length; $i++ ) {
            $rtn_string .= $arr[ rand( 0, ( count( $arr ) - 1 ) ) ];
        }
        return $rtn_string;
    }

    public static function unique() {
        return self::make( uniqid() );
    }
}