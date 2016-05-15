<?php
namespace rauhkrusche\BeerPHP;


class Beer
{
    const BEER_STRINGS = array('q', 'w', 'e', 'r', 't', 'z', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'y', 'x', 'c', 'v', 'b', 'n', 'm');

    public function serialize($input)
    {
        str_replace('.', 'BEER-BEER∫', $input);
        str_replace(',', 'BEER_BEER∫', $input);
    }
}