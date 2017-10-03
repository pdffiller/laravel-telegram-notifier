<?php
namespace pdffiller\LaravelTelegramNotifier;
use Exception;
use Throwable;

class TelegramdException extends  \Exception
{
    public function __construct($message = "", $code = 500, Throwable $previous = null)
    {
        dd( "Internal Telegram Exception");
    }
}