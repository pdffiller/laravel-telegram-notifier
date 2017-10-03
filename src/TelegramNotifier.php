<?php
namespace  pdffiller\LaravelTelegramNotifier;
use pdffiller\LaravelTelegramNotifier\ChannelIdException;
use pdffiller\LaravelTelegramNotifier\TokenException;
use GuzzleHttp;
class TelegramNotifier
{
    public function __construct( $token = null,  $channel_id = null)
    {
        if($token && $channel_id)
        {
            $this->token = $token;
            $this->channel_id = $channel_id;
        }else if(!$token && $channel_id){
            throw new TokenException();
        }else if($token && !$channel_id){
            throw new ChannelIdException();
        }else{
            $this->token = env("TELEGRAM_TOKEN", 'TELEGRAM_TOKEN');;
            $this->channel_id = env("CHAT_ID", 'CHAT_ID');
        }

    }
    public function Notify($message, $code)
    {
        $client = new GuzzleHttp\Client();
        $url = 'https://api.telegram.org/bot'.$this->token.'/sendMessage?chat_id='.$this->channel_id.'&text='.$message;
        $res = $client->request('GET', $url);
    }
}