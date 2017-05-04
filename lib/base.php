<?php
namespace Autolearner;
use Autolearner\Tests;

class Base{
    function init(){
        require( dirname( __FILE__ ) . '/tests.php' );
    }
    
    function get_tests(){
        return new Tests;
    }
}

// $base = new Base;
// $base->init();