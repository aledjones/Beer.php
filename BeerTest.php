<?php
include 'src/Beer/Beer.php';
class BeerTest extends \PHPUnit_Framework_TestCase
{
    public function test_serialization()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->expectOutputString('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
        print $Beer->serialize('Test');
    }

    /*public function test_deserialization()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->expectOutputString('Test');
        print $Beer->deserialize('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
    }*/

    public function test_loop()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->assertEquals('q.m,BEER-QMer', $Beer->deserialize($Beer->serialize('q.m,BEER-QMer')));
    }
}
