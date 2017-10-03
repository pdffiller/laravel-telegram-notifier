<?php
namespace pdffiller\LaravelTelegramNotifier;
use Exception;
use Throwable;

class TelegramChannelIdException extends  \Exception
{
    public function __construct($message = "Channel ID not Found", $code = 404, Throwable $previous = null)
    {

    }
}