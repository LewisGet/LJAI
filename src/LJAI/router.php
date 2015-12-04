<?php

namespace LJAI;

class Router
{
    // 以備不時之需
    public $id;

    public $name;

    public $video;

    public $message;

    public function __construct()
    {
        $this->id = intval($_GET['id']);

        $this->name = $_GET['name'];

        $this->video = $_GET['video'];

        $this->message = $_GET['message'];
    }

    public function getCommentBundle()
    {
        return (object) array(
            'name' => $this->name,
            'video' => $this->video,
            'message' => $this->message
        );
    }
}