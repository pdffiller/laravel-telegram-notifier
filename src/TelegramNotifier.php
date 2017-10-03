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

        if(!$channel_id && !$this->token = env("CHAT_ID")) {
            throw new ChannelIdException();
        }

    }
    public function notify($message, $code)
    {
        $client = new GuzzleHttp\Client();
        $message_text = "Error Code - ".$code."<br>"."Error Body - ".$message;
        $url = 'https://api.telegram.org/bot'.$this->token.'/sendMessage?chat_id='.$this->channel_id.'&text='.$message_text;
        $res = $client->request('GET', $url);
        if($res->getStatusCode()!=200){
            throw new TelegramdException();
        }
    }
}