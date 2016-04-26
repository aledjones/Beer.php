<?php
/**
 * "nobeer.php"
 * Author:  Jonas Möller
 * Date:    18.05.14
 * Time:    18:10
 * © 2014-2016 Jonas Möller
 */

/*header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: text/plain');*/

header('Content-Type: text/plain; charset=UTF-8');


// for first-level interaction on servers/testing purposes only
$input = urldecode($_GET['data']);
echo $input."\n\n";

$M  =   str_replace("µµµµµµµµµµµµµµµµµµµµµµµµµµ∫","M",$input);
$N  =   str_replace("µµµµµµµµµµµµµµµµµµµµµµµµµ∫","N",$M);
//$B  =   str_replace("µµµµµµµµµµµµµµµµµµµµµµµµ∫","B",$N);
$V  =   str_replace("µµµµµµµµµµµµµµµµµµµµµµµ∫","V",$N);
$C  =   str_replace("µµµµµµµµµµµµµµµµµµµµµµ∫","C",$V);
$X  =   str_replace("µµµµµµµµµµµµµµµµµµµµµ∫","X",$C);
$Y  =   str_replace("µµµµµµµµµµµµµµµµµµµµ∫","Y",$X);

$L  =   str_replace("µµµµµµµµµµµµµµµµµµµ∫","L",$Y);
$K  =   str_replace("µµµµµµµµµµµµµµµµµµ∫","K",$L);
$J  =   str_replace("µµµµµµµµµµµµµµµµµ∫","J",$K);
$H  =   str_replace("µµµµµµµµµµµµµµµµ∫","H",$J);
$G  =   str_replace("µµµµµµµµµµµµµµµ∫","G",$H);
$F  =   str_replace("µµµµµµµµµµµµµµ∫","F",$G);
$D  =   str_replace("µµµµµµµµµµµµµ∫","D",$F);
$S  =   str_replace("µµµµµµµµµµµµ∫","S",$D);
$A  =   str_replace("µµµµµµµµµµµ∫","A",$S);

$P  =   str_replace("µµµµµµµµµµ∫","P",$A);
$O  =   str_replace("µµµµµµµµµ∫","O",$P);
$I  =   str_replace("µµµµµµµµ∫","I",$O);
$U  =   str_replace("µµµµµµµ∫","U",$I);
$Z  =   str_replace("µµµµµµ∫","Z",$U);
$T  =   str_replace("µµµµµ∫","T",$Z);
//$R  =   str_replace("µµµµ∫","R",$T);
//$E  =   str_replace("µµµ∫","E",$R);
$W  =   str_replace("µµ∫","W",$T);
$Q  =   str_replace("µ∫","Q",$W);

$commata    =   str_replace("BEER_BEER∫",",",$Q);
$point      =   str_replace("BEER-BEER∫",".",$commata);

$m  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","m",$point);
$n  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","n",$m);
$b  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","b",$n);
$v  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","v",$b);
$c  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","c",$v);
$x  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","x",$c);
$y  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","y",$x);

$l  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","l",$y);
$k  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","k",$l);
$j  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","j",$k);
$h  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","h",$j);
$g  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","g",$h);
$f  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","f",$g);
$d  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","d",$f);
$s  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","s",$d);
$a  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","a",$s);

$p  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫","p",$a);
$o  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEERBEER∫","o",$p);
$i  =   str_replace("BEERBEERBEERBEERBEERBEERBEERBEER∫","i",$o);
$u  =   str_replace("BEERBEERBEERBEERBEERBEERBEER∫","u",$i);
$z  =   str_replace("BEERBEERBEERBEERBEERBEER∫","z",$u);
$t  =   str_replace("BEERBEERBEERBEERBEER∫","t",$z);
$r  =   str_replace("BEERBEERBEERBEER∫","r",$t);
$e  =   str_replace("BEERBEERBEER∫","e",$r);
$w  =   str_replace("BEERBEER∫","w",$e);
$q  =   str_replace("BEER∫","q",$w);

echo '» '.$q.' «';