Beer.PHP
========

A [Beer](https://github.com/rauhkrusche/Beer) implemenation in PHP.

## Prerequisites ##
- PHP 5.3 or higher

## Installation ##
The simplest way to install Beer.PHP is to use our [NuGet package]


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
