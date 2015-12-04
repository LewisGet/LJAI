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

        $comment = $route->getCommentBundle();

        return $ai->match($comment);
    }
}