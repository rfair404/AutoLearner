<?php
use PHPUnit\Framework\TestCase;
// use Autolearner\Tests;

class TestsTest extends TestCase{

    function setUp(){
        $this->tests = new Autolearner\Tests;
    }
    
    function testGetQuestionsReturnsArrayOfQuestions(){
        $this->assertTrue( is_array( $this->tests->get_questions() ) );
    }
    
    function testGetTestNumberReturnsInt(){
        $this->assertTrue( is_int( $this->tests->get_test_number() ) );
    }
    
    function testGetQuestionsFromFileReturnsExceptionIfFileNotFound(){
        $this->assertFalse( $this->tests->get_questions_from_file( dirname( dirname( __FILE__ ) ) . '/examples/not-found.json' ) );
    }
    
    function testGetQuestionsFromFileReturnsContentOfJsonFile(){
        $this->assertEquals( 'example text from file', $this->tests->get_questions_from_file( dirname( dirname( __FILE__ ) ) . '/examples/simple.json' ) );
    }
    
    function testGetQuestionsJsonReturnsArrayFromJsonContent(){
        $this->assertEquals( array( "1" => "one", "2" => "two", "3" => "three"), $this->tests->get_questions_json( $this->tests->get_questions_from_file( dirname( dirname( __FILE__ ) ) . '/examples/simple-array.json' ) ) );
    }
    
    function testGetTestByNameReturnsFalseIfFileNotExists(){
        $this->assertFalse( $this->tests->get_test_by_name('missing') );
    }
    
    function testGetTestByNameReturnsTestObject(){
        $this->assertEquals( array( "1" => "one", "2" => "two", "3" => "three" ), $this->tests->get_test_by_name( 'simple-array' ) );
    }
    
    function testGetTestByNameReturnsComponentsOfTest(){
        $test = $this->tests->get_test_by_name( 'baby-steps' );
        $this->assertArrayHasKey( 'name',       $test );
        $this->assertArrayHasKey( 'subject',    $test );
        $this->assertArrayHasKey( 'questions',  $test );
    }
    
    function testGetTestQuestionsReturnsArrayOfQuestions(){
        $test = $this->tests->get_test_by_name( 'baby-steps' );
        $questions = $test['questions'];
        $this->assertArrayHasKey('1',           $questions);
        $this->assertArrayHasKey('question',    $questions[1]);
        $this->assertArrayHasKey('method',      $questions[1]);
        $this->assertArrayHasKey('paramaters',  $questions[1]);
    }
    
    // function testEachMethodInQuestionsExist(){
    //     $test = $this->tests->get_test_by_name( 'baby-steps' );
    //     $questions = $test['questions'];
    //     $this->assertTrue( class_exists( $questions[1]['method'][0] ) );
    //     $this->assertTrue( class_exists( $questions[2]['method'][0] ) );
    // }
    
}