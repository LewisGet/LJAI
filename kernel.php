<?php

require_once __DIR__ . "/src/LJAI/router.php";
require_once __DIR__ . "/src/LJAI/match.php";
require_once __DIR__ . "/src/LJClient/youtube.php";

class Kerenl
{
    public function execute()
    {
        $ai = new LJAI\Match();
        $route = new LJAI\Router();
        $jsCode = new LJClient\Youtube();

        $comment = $route->getCommentBundle();
        $reply = $ai->match($comment);

        $jsCode->id = $route->id;

        $js = $jsCode->execute($reply);

        return $js;
    }
}