<?php

namespace rauhkrusche\BeerPHP;
class Beer
{
    private $alphabet = array('q', 'w', 'e', 'r', 't', 'z', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'y', 'x', 'c', 'v', 'b', 'n', 'm');

    public function serialize($input)
    {
        $input = str_replace('.', '🍻-🍻∫', $input);
        $input = str_replace(',', '🍻_🍻∫', $input);

        for ($i = 0; $i < count($this->alphabet); $i++) {
            if (!in_array($this->alphabet[$i], array('b', 'e', 'r'))) {
                $input = str_replace(strtoupper($this->alphabet[$i]), $this->repeatString('∫', '🍻', $i), $input);
            }
            $input = str_replace($this->alphabet[$i], $this->repeatString('∫', '🍺', $i), $input);

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

    public function deserialize($input)
    {
        $input = str_replace('🍻-🍻∫', '.', $input);
        $input = str_replace('🍻_🍻∫', ',', $input);

        for ($i = count($this->alphabet) - 1; $i >= 0; $i--) {
            if (!in_array($this->alphabet[$i], array('b', 'e', 'r'))) {
                $input = str_replace($this->repeatString('∫', '🍻', $i), strtoupper($this->alphabet[$i]), $input);
            }
            $input = str_replace($this->repeatString('∫', '🍺', $i), $this->alphabet[$i], $input);

        }
        return $input;
    }
}