<?php
namespace rauhkrusche\BeerPHP;
const LETTERS = array('q', 'w', 'e', 'r', 't', 'z', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'y', 'x', 'c', 'v', 'b', 'n', 'm');

class Beer
{

    public function serialize($input)
    {
        $input = str_replace('.', 'BEER-BEER∫', $input);
        $input = str_replace(',', 'BEER_BEER∫', $input);

        for ($i = 0; $i <= count(LETTERS); $i++) {
            if (!in_array(LETTERS[$i], array('b', 'e', 'r'))) {
                $input = str_replace(strtoupper(LETTERS[$i]), $this->repeatString('∫', 'µ', $i), $input);
            }
            $input = str_replace(LETTERS[$i], $this->repeatString('∫', 'BEER', $i), $input);

        }
        return $input;
    }

    public function deserialize($input)
    {
        $input = str_replace('BEER-BEER∫', '.', $input);
        $input = str_replace('BEER_BEER∫', ',', $input);

        for ($i = count(LETTERS) - 1; $i >= 0; $i--) {
            if (!in_array(LETTERS[$i], array('b', 'e', 'r'))) {
                $input = str_replace($this->repeatString('∫', 'µ', $i), strtoupper(LETTERS[$i]), $input);
            }
            $input = str_replace($this->repeatString('∫', 'BEER', $i), LETTERS[$i], $input);

        }
        return $input;
    }

    private function repeatString($finalChar, $stringToRepeat, $count)
    {
        $result = $stringToRepeat;
        for ($i = 0; $i < $count; $i++) {
            $result .= $stringToRepeat;
        }
        return $result . $finalChar;
    }
}