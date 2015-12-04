<?php

namespace LJClient;

class Youtube
{
    public $id;

    public function execute($message)
    {
        return 'var window.reply_' . $this->id . ' = "' . $message . '";';
    }
}