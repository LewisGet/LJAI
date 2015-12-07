<?php

namespace LJAI;

class Match
{
    public $name = "";
    public $video = "";
    public $message = "";

    public $mapping = array(
        'moreMinecraft' => array(
            'have' => '几时出 and Minecraft|几时出 and minecraft|几时出 and 麥快|几时出 and 賣塊|几时出 and 麥塊|好久沒 and Minecraft|好久沒 and minecraft|好久沒 and 麥快|好久沒 and 賣塊|好久沒 and 麥塊|多出點 and Minecraft|多出點 and 麥快|多出點 and 賣塊|多出點 and 創世神|多出點 and 我的世界|在拍 and Minecraft|在拍 and 麥快|在拍 and 賣塊|在拍 and 創世神|在拍 and 我的世界|多出 and Minecraft|多出 and 麥快|多出 and 賣塊|多出 and 創世神|多出 and 我的世界|再出 and Minecraft|再出 and 麥快|再出 and 賣塊|再出 and 創世神|再出 and 我的世界|請出 and Minecraft|請出 and 麥快|請出 and 賣塊|請出 and 創世神|請出 and 我的世界|在出 and Minecraft|在出 and 麥快|在出 and 賣塊|在出 and 創世神|在出 and 我的世界|多拍 and Minecraft|多拍 and 麥快|多拍 and 賣塊|多拍 and 創世神|多拍 and 我的世界',
            'reply' => array(
                '謝謝你喜歡我們出 Minecraft 影片！可惜我們這次是出 {game} 的影片。我們會努力多出點的！',
                '感謝你這麼喜歡我們實況的 Minecraft 影片！我們會努力多出點的！',
                '好喔！我們會努力多出點 Minecraft 影片的！'
            )
        ),

        'more' => array(
            'have' => '可以 and 在拍|可以 and 多拍|多拍點|多出點',
            'reply' => array(
                '謝謝你喜歡這 {game} 影片，我們會多出點喔！感謝支持！'
            )
        ),
        /*
        'goToPlay' => array(
            'have' => ''
        ),
        */
        'join' => array(
            'have' => '我 and 加入|我 and 一起玩',
            'reply' => array(
                '抱歉喔，我們目前沒有再公開招生。不好意思。不過謝謝你喜歡我們的遊戲影片 : )'
            )
        ),

        // 解釋遊戲元素留言
        'because' => array (
            'have' => '因為|所以|因为|所以|你可以用|上有苦力帕|草地是 and 屍|空氣 and 女巫',
            'without' => '',
            'reply' => array(
                '原來是這樣啊！',
                '哦！原來是這樣啊！難怪！',
                '哦哦哦！原來如此！'
            )
        ),
        'what' => array(
            'have' => '是什麼 and 作影片|是什麼 and 做影片|是什麼 and 坐影片|是什麼 and 剪影片|是什麼 and 減影片|是什麼 and 出影片|是什麼 and 錄影片|是什麼 and 錄影|是什麼 and 錄音|是什麼 and 實況|是什麼 and 石礦|是什麼 and 時況|什麼 and 作影片|什麼 and 做影片|什麼 and 坐影片|什麼 and 剪影片|什麼 and 減影片|什麼 and 出影片|什麼 and 錄影片|什麼 and 錄影|什麼 and 錄音|什麼 and 實況|什麼 and 石礦|什麼 and 時況|用什麼 and 作影片|用什麼 and 做影片|用什麼 and 坐影片|用什麼 and 剪影片|用什麼 and 減影片|用什麼 and 出影片|用什麼 and 錄影片|用什麼 and 錄影|用什麼 and 錄音|用什麼 and 實況|用什麼 and 石礦|用什麼 and 時況',
            'reply' => array(
                '有關製作這 {game} 影片的相關資訊，請參考 lj.dsa.tw/qna.html 喔！ : )',
                '這 {game} 影片使用的相關內容，請參考 lj.dsa.tw/qna.html 喔！ : )'
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
            'have' => '是什麼 and 模組|叫什麼 and 模組|是什麼 and 地圖|叫什麼 and 地圖|模組|地圖|甚麼 and 模組|鑽石 and 下載',
            'without' => '',
            'reply' => array(
                '{videoGame}'
            )
        ),
        'shakya' => array(
            'have' => '釋迦|榴槤',
            'reply' => array(
                '哈哈哈，對阿。因為在拍 {game} 影片時，沒有 釋迦有授權的圖片，所以就放個榴槤 XD'
            )
        ),
        'sick' => array(
            'have' => '早日康復|記得保暖|保重',
            'reply' => array(
                '謝謝！大家也要記得保暖喔！ : )'
            )
        ),
        'birthday' => array(
            'have' => '我 and 生日|也 and 生日',
            'reply' => array(
                '生日快樂阿阿阿阿阿！ : )',
                '生日快樂！ : )'
            )
        ),
        'faster' => array(
            'have' => '還沒 and 出 and 片|趕快 and 出新|趕快 and 更新|趕快 and 上傳|趕快 and 拍|感快 and 出新|感快 and 更新|感快 and 上傳|感快 and 拍|敢快 and 出新|敢快 and 更新|敢快 and 上傳|敢快 and 拍|快點 and 出新|快點 and 更新|快點 and 上傳|快點 and 拍|馬上 and 出新|馬上 and 更新|馬上 and 上傳|馬上 and 拍|快点 and 更新|快点 and 出影片|早点 and 更新|早点 and 出影片',
            'reply' => array(
                '謝謝你喜歡我們的 {game}影片，我們會盡快出新的喔！',
                '謝謝你喜歡我們的 {game}影片，我會盡量剪快點的！ : )',
                '我會盡量剪快點的！ : ) 多出些 {game} 影片的！',
            )
        ),
        'bgm' => array(
            'have' => 'BGM and 求|BGM and 是什麼|BGM and 是啥|bgm and 求|bgm and 是什麼|bgm and 是啥|Bgm and 求|Bgm and 是什麼|Bgm and 是啥|BG and 求|BG and 是什麼|BG and 是啥|Bg and 求|Bg and 是什麼|Bg and 是啥|bg and 求|bg and 是什麼|bg and 是啥|音樂 and 求|音樂 and 是什麼|音樂 and 是啥|音乐 and 求|音乐 and 是什麼|音乐 and 是啥|開頭 and 求|開頭 and 是什麼|開頭 and 是啥',
            'reply' => array(
                '有關這部 {game} 影片，音樂資訊請參考 lj.dsa.tw/qna.html 喔！ : )',
                '這 {game} 影片的音樂可以在內 lj.dsa.tw/qna.html 找找喔！ : )',
            )
        ),
        'lol' => array(
            'have' => '有玩 and 英雄聯盟|有玩 and lol|有打 and 英雄聯盟|有打 and lol',
            'reply' => array(
                '沒有喔！我沒有打 lol : )',
                '沒耶，我沒玩英雄聯盟'
            )
        ),
        // 擴充位置

        // 感謝支持墊底驗證
        'funny' => array(
            'have' => '我笑出來|肚子 and 痛|喜歡|很好看|好看|好玩|笑到|搞笑|訂閱|期待|支持 and 你|支持 and 妳|笑死|笑屎|好笑|有趣|永遠|訂閱|订阅|也蠻厲|蠻厲|超神|一個讚|讚啦|繼續拍|恭喜|忠實粉絲|你的 and 粉絲|太好看了|太棒了|哈哈哈',
            'without' => '不喜歡|討厭|很煩', //隨回應增加
            'reply' => array(
                '太太太感謝妳支持啦！也謝謝你喜歡這 {game} 影片！ : )',
                '謝謝你喜歡這 {game} 影片！感謝支持啊！ : )',
                'Ya 謝謝喔！感謝你喜歡這 {game} 影片！'
            )
        )
    );

    public $gameMapping = array(
        'GTA v' => 'GTA|gta|Gta|gTa',
        'Gmod' => 'Gmod|gmod|Garry|garry',
        'Minecraft' => 'Minecraft|minecraft|我的世界|當個創世神|我的世界|当个创世神',
        'Don\'t starve' => 'starve|饑荒|饥荒',
        'Payday' => 'Payday|payday|劫薪日',
        '瑪奇英雄傳' => '瑪奇英雄傳|瑪英|馬英',
        '詭異音樂' => '【阿飄崩壞】飄笨|Minecraft funny moment chicken remix song|一分鐘回兩千則留言的方法。',
        '愚人節' => '愚人節'
    );

    public $gameTypeMapping = array(
        "世界只有鑽石|的鑽石都變木頭，放火後？" => "這是 {game} 生存試煉II 地圖，網址在 http://forum.gamer.com.tw/C.php?bsn=18673&snA=125464&tnum=51&subbsn=15 喔！",
        "Minecraft and 第 and 開" => "這是 {game} Lucky block 模組喔！網址在 http://www.minecraftmods.com/lucky-block-mod/",
        "如何用岩漿生出雞" => "這 {game} 影片，太久以前拍的了！抱歉忘記是什麼 {game} 模組了。"
    );

    public function match($comment)
    {
        $this->name = $comment->name;
        $this->video = $comment->video;
        $this->message = $comment->message;

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
                    if ($this->notHave($this->message, $needWord))
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
                    
                    if ($this->have($this->message, $without))
                    {
                        $allAllow = false;
                    }
                }
                
                // 如果都合，回傳對應回應
                if ($allAllow)
                {
                    // 隨機選個回應, 由 0 到 最後一個留言
                    $replyNumber = rand(1, sizeof($mapping['reply'])) - 1;

                    $reply = $mapping['reply'][$replyNumber];

                    $reply = $this->putMethodsWord($reply);

                    return $reply;
                }
            }
        }
        
        // 都沒吻合
        return "not found!";
    }

    public function putMethodsWord($message)
    {
        $message = str_replace("{game}", $this->getGameName($this->video), $message);
        $message = str_replace("{userGame}", $this->getGameName($this->video), $message);
        $message = str_replace("{videoGame}", $this->getGameType($this->video), $message);

        return $message;
    }

    public function getGameName($value)
    {
        foreach ($this->gameMapping as $gameName => $keywords)
        {
            $keywords = explode("|", $keywords);

            foreach ($keywords as $keyword)
            {
                if ($this->have($value, $keyword))
                {
                    return $gameName;
                }
            }
        }

        return "not found game name!";
    }

    public function getGameType($string)
    {
        foreach ($this->gameTypeMapping as $videoKeyWords => $reply)
        {
            $videoKeyWords = explode("|", $videoKeyWords);

            foreach ($videoKeyWords as $videoKeyWord)
            {
                $allow = true;
                $videoKeyWord = explode(" and ", $videoKeyWord);

                foreach ($videoKeyWord as $needPart)
                {
                    if ($this->notHave($string, $needPart))
                    {
                        $allow = false;
                    }
                }

                if ($allow)
                {
                    return $reply;
                }
            }
        }

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
