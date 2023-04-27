<?php 
//==と===の違い
//===データの型まで比較をする時に使用
//バグが起こらないようにするためにも===を使用する。
// if(1 === '1') {
//     echo 'true';
// } else {
//     echo 'false';
// }

//補足
//falsyな値
//''(空文字)
//0(数値、文字列)
//NULL
//FALSE
$var = '';
if(0) {
    echo 'true';
} else {
    echo 'false';
}

// $var = '';
// if(!0) {
//     echo 'true';
// } else {
//     echo 'false';
// }