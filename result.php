<?php

    // rand関数を使って、運勢をランダム表示させる
    
    $fortune = rand(1,20);

    $daikichi =  "<img src=\"img/daikichi.png\">";
    $chuukichi =  "<img src=\"img/chuukichi.png\">";
    $kichi =  "<img src=\"img/kichi.png\">";
    $kyou =  "<img src=\"img/kyou.png\">";
    $daikyou =  "<img src=\"img/daikyou.png\">";

    if($fortune >= 15) {
        $f_result = $daikichi;
    } elseif($fortune >= 10) {
        $f_result = $chuukichi;
    } elseif($fortune >= 3) {
        $f_result = $kichi;
    } elseif($fortune == 2) {
        $f_result = $kyou;
    } else {
        $f_result = $daikyou;
    }

    // ラッキーカラーをcolor.txtにまとめて記述し、呼び出して$colorsに代入

    $colors = file(__DIR__ . '/color.txt', FILE_IGNORE_NEW_LINES);

    // ラッキーアイテムをitem.txtにまとめて記述し、呼び出して$itemsに代入

    $items = file(__DIR__ . '/item.txt', FILE_IGNORE_NEW_LINES);

    require_once 'views/result.tpl.php';