<?php

namespace LJClient;

class Youtube
{
    public $id;

    public function execute($message)
    {
        return 'window.reply_' . $this->id . '.innerHTML = "' . $message . '";';
    }
}