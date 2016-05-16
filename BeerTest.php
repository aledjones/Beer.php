<?php
include 'src/Beer/Beer.php';
class BeerTest extends \PHPUnit_Framework_TestCase
{
    public function test_serialization()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->assertEquals('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫', $Beer->serialize('Test'));
    }

    public function test_deserialization()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->assertEquals('Test', $Beer->deserialize('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫'));
        print $Beer->deserialize('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
    }

    public function test_loop()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->assertEquals('q.m,BEER-QMer', $Beer->deserialize($Beer->serialize('q.m,BEER-QMer')));
    }
}
