<?php 
/*
 - isset
 変数が定義されていて、null以外の値の時にtrueを返す。
 
 - empty
 issetがfalse、または値がfalsyな時にtrueを返す。(否定の論理演算子と使用されることがお多い)

 !isset($val) || $val == false

 - falsyな値
 "" (空文字)
 0 (数値、文字列)
 NULL
 FALSE
*/

$a = 0;
$b = 1;

// var_dump($a == false);　戻り値が知りたい時に使用する。

if(!isset($a) || $a == false) {
    echo 'true';
} else {
    echo 'false';
}

