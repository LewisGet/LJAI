<?php

require_once __DIR__ . "/filter.output.json.php";

foreach ($rootComment as $key => $comment)
{
    $rootComment[$key] = json_decode($comment);
}

foreach ($rootComment as $comment)
{
    $message = $comment->commentMessage;

    // 無意義過濾
    $message = str_replace("阿飄", "", $message);
    $message = str_replace("阿飘", "", $message);
    $message = str_replace("笨笨", "", $message);
    $message = str_replace("XD", "", $message);
    $message = str_replace("xd", "", $message);
    $message = str_replace("dd", "", $message);
    $message = str_replace("www", "", $message);
    $message = str_replace("ww", "", $message);
    $message = str_replace("DD", "", $message);
    $message = str_replace("哈哈", "", $message);
    $message = str_replace("的影片", "", $message);
    $message = str_replace("影片", "", $message);
    $message = str_replace("大大", "", $message);

    // 解釋遊戲要素的
    $message = str_replace("因為", "", $message);
    $message = str_replace("所以", "", $message);

    // 問遊戲怎樣的
    $message = str_replace("為什麼", "", $message);
    $message = str_replace("要怎麼", "", $message); // 有可能是問 愚人節影片

    // 要東西的
    $message = str_replace("是什麼", "", $message);
    $message = str_replace("叫什麼", "", $message);

    // 問東西的
    $message = str_replace("这又是什么", "", $message);
    $message = str_replace("这是什么", "", $message);
    $message = str_replace("是什么", "", $message);
    $message = str_replace("這又是什麼", "", $message);
    $message = str_replace("這是什麼", "", $message);
    $message = str_replace("是什麼", "", $message);

    // 要模組的
    $message = str_replace("模組", "", $message);

    // 要遊戲地圖的
    $message = str_replace("地圖", "", $message);

    // 感謝支持的 但須判斷，內是否還有含有 可以。
    $message = str_replace("我笑出來", "", $message);
    $message = str_replace("肚子", "", $message); // 應該是指肚子好痛
    $message = str_replace("喜歡", "", $message);
    $message = str_replace("好笑", "", $message);
    $message = str_replace("很好看", "", $message);
    $message = str_replace("好看", "", $message);
    $message = str_replace("笑死", "", $message);
    $message = str_replace("好玩", "", $message);
    $message = str_replace("笑到", "", $message);
    $message = str_replace("搞笑", "", $message);
    $message = str_replace("訂閱", "", $message);
    $message = str_replace("期待", "", $message);
    $message = str_replace("支持", "", $message);
    $message = str_replace("笑屎", "", $message);
    $message = str_replace("永遠", "", $message);
    $message = str_replace("我笑", "", $message);
    $message = str_replace("真是太", "", $message);
    $message = str_replace("订阅", "", $message);

    // 抱歉久等，謝謝支持之類
    $message = str_replace("終於", "", $message);
    $message = str_replace("好久", "", $message);

    // 好可愛 須判斷 是否含有 誰的人名 若沒有 就感謝支持
    $message = str_replace("好可愛", "", $message);

    // 請求 或者 可以不要
    $message = str_replace("請問", "", $message);
    $message = str_replace("可以", "", $message);
    $message = str_replace("希望", "", $message);

    // 愚人節影片
    $message = str_replace("程式碼", "", $message);
    $message = str_replace("怎樣解除", "", $message);
    $message = str_replace("怎麼解除", "", $message);
    $message = str_replace("怎麼用回來", "", $message);
    $message = str_replace("用回來", "", $message);
    $message = str_replace("愚人", "", $message);

    // 鑽石棒棒
    $message = str_replace("鑽石棒棒", "", $message);
    $message = str_replace("史萊姆", "", $message);

    // 飄笨 say 影片
    $message = str_replace("殲滅", "", $message);

    // 音樂影片 須判斷正負面字詞
    $message = str_replace("音樂", "", $message);
    $message = str_replace("洗腦", "", $message);
    $message = str_replace("鈴聲", "", $message);

    // 看到露臉 或 看到桌布 或 看到啥鬼的
    $message = str_replace("看到", "", $message);
    $message = str_replace("痘痘", "", $message);
    $message = str_replace("豆豆", "", $message);
    $message = str_replace("嘴巴", "", $message);
    $message = str_replace("下巴", "", $message);

    echo $message . "\n";
}

