<?php
namespace pdffiller\LaravelTelegramNotifier;
use Exception;
use Throwable;

class ChannelIdException extends  \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        dd( "Channel ID not Found");
    }
}