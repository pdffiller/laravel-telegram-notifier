<?php
namespace pdffiller\LaravelTelegramNotifier;
use Exception;
use Throwable;

class TokenException extends  \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        dd("Token mismatch exception");
    }
}