<?php
namespace  pdffiller\LaravelTelegramNotifier;
use GuzzleHttp;
class TelegramNotifier
{
    public function __construct( $token = null,  $channel_id = null)
    {
        if(!$token && !$this->token = env("TELEGRAM_TOKEN")) {
            throw new TokenException();
        }

        if(!$channel_id && !$this->channel_id = env("CHAT_ID")) {
            throw new ChannelIdException();
        }

    }
    public function notify($message, $code)
    {
        $client = new GuzzleHttp\Client();
        $message = $message ? $message : "Empty body";
        $message_text = urlencode("Message - " . $message . "\n" . "Error Code - " . $code);
        $url = 'https://api.telegram.org/bot'.$this->token.'/sendMessage?chat_id='.$this->channel_id.'&text='.$message_text;
        $res = $client->request('GET', $url);
        if($res->getStatusCode()!=200){
            throw new TelegramdException();
        }
    }
}