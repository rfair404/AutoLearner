<?php 
namespace Autolearner;

class Tests{
    function get_questions(){
        return array();
    }
    
    function get_test_number(){
        return intval( false );
    }
    
    function get_questions_from_file( $filename ){
        if( ! file_exists( $filename ) )
            return false;
            
        return file_get_contents( $filename , true );
    }
    
    function get_questions_json( $content ){
        return json_decode( $content, true );
    }
    
    function get_test_by_name( $name ){
        $path = dirname( dirname( __FILE__ ) ) . '/examples/' . $name . '.json';
        
        if( ! file_exists( $path ) )
            return false;
            
        $content = self::get_questions_from_file( $path );

        return self::get_questions_json( $content );
    }
    
}