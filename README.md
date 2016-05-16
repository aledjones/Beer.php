[![Build Status](https://travis-ci.org/rauhkrusche/Beer.php.svg?branch=master)](https://travis-ci.org/rauhkrusche/Beer.php)
[![Packagist](https://img.shields.io/packagist/v/rauhkrusche/beer-php.svg)]()
Beer.PHP
========

A [Beer](https://github.com/rauhkrusche/Beer) implemenation in PHP.

## Prerequisites ##
- PHP 5.3 or higher

## Installation ##
The simplest way to install Beer.PHP is to use our [Composer package](https://packagist.org/packages/rauhkrusche/beer-php).

```
{
    "require": {
        "rauhkrusche/beer-php": "1.0*"
    }
}
```


## Usage ##
Simple example in PHP:

```
include 'src/Beer/Beer.php'
$b = new rauhkrusche\BeerPHP\Beer;

    $b->serialize('Test');
    // Output: µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫

    $b->deserialize('µµµµµ∫BEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEER∫');
    // Output: Test
```
