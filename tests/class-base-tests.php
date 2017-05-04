<?php
namespace Autolearner;
use Autolearner\Base;
// use Autolearner\Tests;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase{
    
    function setUp(){
        $this->base = new Base;    
    }
    
    function testRealityFirst(){
        $this->assertEquals(0, 0);
    }
    
    function testBaseFileExists(){
        $this->assertTrue( file_exists( dirname( dirname( __FILE__ ) ) . '/lib/base.php' ) );
    }
    
    function testTestsFileExists(){
        $this->assertTrue( file_exists( dirname( dirname( __FILE__ ) ) . '/lib/tests.php' ) );
    }
    
    function testBaseClassExists(){
        $this->assertTrue( class_exists( 'Autolearner\Base' ) );
    }
    
    function testBaseIsInstanceOfBase(){
        $this->assertInstanceOf( 'Autolearner\Base', $this->base );
    }
    
    function testBaseHasInitReturnsNull(){
        $this->assertEquals( null, $this->base->init() );
    }
    
    function testBaseLoadTestsReturnsTestsObject(){
        $this->assertInstanceOf( 'Autolearner\Tests', $this->base->get_tests() );
    }
    
}
