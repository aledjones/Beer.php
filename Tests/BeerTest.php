<?php

namespace rauhkrusche\BeerPHP;

use PHPUnit\Framework\TestCase;

class BeerTest extends TestCase
{
    public function testSerialize()
    {
        $Beer = new Beer();
        $this->expectOutputString('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
        print $Beer->serialize('Test');
    }

    public function testDeserialize()
    {
        $Beer = new Beer();
        $this->expectOutputString('Test');
        print $Beer->deserialize('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
    }

    public function testLoop()
    {
        $Beer = new Beer();
        $this->expectOutputString('q.m,BEER-QMer');
        print $Beer->deserialize($Beer->serialize('q.m,BEER-QMer'));
    }
}
