<?php

require_once __DIR__ . "/filter.output.json.php";

class LJAI
{
    public $rootComment;
    public $mapping = array(
        'more' => array(
            'have' => '可以 and 在拍|可以 and 多拍|多拍點|多出點',
            'reply' => array(
                '謝謝你喜歡這 {game} 影片，我們會多出點喔！感謝支持！'
            )
        ),
        
        // 解釋遊戲元素留言
        'because' => array (
            'have' => '因為|所以|因为|所以',
            'without' => '',
            'reply' => array(
                '原來是這樣啊！',
                '哦！原來是這樣啊！難怪！',
                '哦哦哦！原來如此！'
            )
        ),
        'what' => array(
            'have' => '什麼 and 軟體|什麼 and 剪片|什麼 and 影片',
            'reply' => array(
                '謝謝你喜歡這 {game} 影片，相關資訊請參考 lj.dsa.tw/qna.html 喔！'
            )
        ),
        'whatGame' => array(
            'have' => '是什麼 and 遊戲|叫什麼 and 遊戲',
            'without' => '模組|mod|下載點|網址',
            'reply' => array(
                '這是 {game} 哦！ : )',
                '謝謝你喜歡這， {game} 影片，這是 {game} 喔！ : )'
            )
        ),
        'whatModOrMap' => array(
            'have' => '是什麼 and 模組|叫什麼 and 模組|是什麼 and 地圖|叫什麼 and 地圖|模組|地圖',
            'without' => '',
            'reply' => array(
                '這是 {game} {videoType} 哦！',
                '謝謝你喜歡這， {game} 影片，這是 {game} {videoType} 喔！ : )'
            )
        ),
        'funny' => array(
            'have' => '我笑出來|肚子 and 痛|喜歡|很好看|好看|好玩|笑到|搞笑|訂閱|期待|支持 and 你|支持 and 妳|笑死|笑屎|好笑|有趣|永遠|訂閱|订阅|也蠻厲|蠻厲|超神|一個讚',
            'without' => '不喜歡|討厭|很煩', //隨回應增加
            'reply' => array(
                '太太太感謝妳支持啦！也謝謝你喜歡這 {game} 影片！ : )',
                '謝謝你喜歡這 {game} 影片！感謝支持啊！ : )',
                'Ya 謝謝喔！感謝你喜歡這 {game} 影片！'
            )
        ),
        'shakya' => array(
            'have' => '釋迦|榴槤',
            'reply' => array(
                '哈哈哈，對阿。因為在拍 {game} 影片時，沒有 釋迦有授權的圖片，所以就放個榴槤 XD'
            )
        ),
        // 未上完
    );

    public function match($comment)
    {
        // 所有留言類型
        foreach ($this->mapping as $mapping)
        {
            $keywords = explode("|", $mapping['have']);
            
            // 所有此類型的關鍵字組合
            foreach ($keywords as $keyword)
            {
                $allNeedToHave = explode(" and ", $keyword);
                $allWithout = explode("|", $mapping['without']);

                $allAllow = true;
                
                // 所有須出現字
                foreach ($allNeedToHave as $needWord)
                {
                    if ($this->notHave($comment->commentMessage, $needWord))
                    {
                        // 如果有一個 and 後的不成立，這組關鍵字就不和
                        $allAllow = false;
                    }
                }
                
                foreach ($allWithout as $without)
                {
                    if (empty($without))
                    {
                        continue;
                    }
                    
                    if ($this->have($comment->commentMessage, $without))
                    {
                        $allAllow = false;
                    }
                }
                
                // 如果都合，回傳對應回應
                if ($allAllow)
                {
                    // 隨機選個回應, 由 0 到 最後一個留言
                    $replyNumber = rand(1, sizeof($mapping['reply'])) - 1;

                    return $mapping['reply'][$replyNumber];
                }
            }
        }
        
        // 都沒吻合
        return "not found!";
    }
    
    /**
     * 是否含有
     */
    public function have($string, $value)
    {
        return (strpos($string, $value) !== false);
    }
    
    public function notHave($string, $value)
    {
        return ! ($this->have($string, $value));
    }
}

$ljAi = new LJAI();

// 整理輸入資訊
foreach ($rootComment as $key => $comment)
{
    $comment = json_decode($comment);
    $rootComment[$key] = $comment;

    echo $comment->commentMessage . "\n";
    echo " => " . $ljAi->match($comment) . "\n";
}