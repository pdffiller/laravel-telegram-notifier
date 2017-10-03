<?php
namespace pdffiller\LaravelTelegramNotifier;
use Exception;
use Throwable;

class TelegramTokenException extends  \Exception
{
    public function __construct($message = "Token mismatch exception", $code = 404, Throwable $previous = null)
    {

    }
}