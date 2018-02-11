[![Build Status](https://travis-ci.org/rauhkrusche/Beer.php.svg?branch=master)](https://travis-ci.org/rauhkrusche/Beer.php)
[![Packagist](https://img.shields.io/packagist/v/rauhkrusche/beer-php.svg)](https://packagist.org/packages/rauhkrusche/beer-php)  

BeerPHP  
========

A [Beer](https://github.com/rauhkrusche/Beer) implementation in PHP.

## Prerequisites ##
- PHP 7.0 or higher

## Installation ##
The simplest way to install BeerPHP is to use our [Composer package](https://packagist.org/packages/rauhkrusche/beer-php).

```
{
    ...
    
    "require": {
        "rauhkrusche/beer-php": "0.2*"
    }
    
    ...
}
```

If you are unable to use composer for your project, just download the [latest release](https://github.com/rauhkrusche/Beer.php/releases/latest) and extract its content into your project.  

## Usage ##
Default usage:

```
require 'vendor/autoload.php';
$b = new \rauhkrusche\BeerPHP\Beer();

    print $b->serialize('tux') . "\n";
    // Output = BEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫
    
    print $b->deserialize('BEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEER∫BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫');
    // Output = tux
```
