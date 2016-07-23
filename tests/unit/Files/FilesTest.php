<?php
    namespace alunos\biblioteca\Tests\Unit\Files;

    use alunos\biblioteca\Files\Csv\Csv;
    
    class FileTest extends \PHPUnit_Framework_TestCase{
        protected $csv;
        
        protected function setUp(){
            $this->csv = new Csv();
        }
        
        public function testInstanceCsv(){
            $this->assertInstanceOf('alunos\biblioteca\Files\Csv\Csv', $this->csv);
        }
        
        public function testSomar(){
            $v1 = 1;
            $v2 = 2;
            $vlrEsperado = 3;
            $this->assertEquals($vlrEsperado, $this->csv->somar($v1, $v2));
        }
        
        public function testSomarNotInt(){
            $num = 1;
            $str = 'a';
            
            $this->assertFalse($this->csv->somar($num, $str));
            $this->assertFalse($this->csv->somar($str, $num));
        }
        
        public function testSomarReturnInt(){
            $v1 = 1;
            $v2 = 2;            
            $this->assertInternalType('integer', $this->csv->somar($v1, $v2));
        }
    }
?>