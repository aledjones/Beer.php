<?php
include 'src/Beer/Beer.php';
class BeerTest extends \PHPUnit_Framework_TestCase
{
    public function test_serialization()
    {
        $Beer = new rauhkrusche\BeerPHP\Beer;
        $this->expectOutputString('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫_µµµµµ∫Eµµµµµµµµµµµµ∫µµµµµ∫-BEERBEERBEERBEERBEER∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫-BEERBEER-BEER∫BEER_BEER∫');
        print $Beer->serialize('Test_TEST-test-BEER.,');
    }
}
