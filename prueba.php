<?php
require 'archivo.php';
 
class Prueba extends PHPUnit_Framework_TestCase
{
    private $p;
 
    protected function setUp()
    {
        $this->p = new archivo();
    }
 
    protected function tearDown()
    {
        $this->p = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->p->add(1, 2);
        $this->assertEquals(3, $result);
}
}
