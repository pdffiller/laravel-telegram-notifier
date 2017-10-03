To get error mesages in TELEGRAM Chat
**Step 1: Add "repositories" to composer.json**
	
	"repositories": [
        {
			"type": "vcs",
            "url": "https://github.com/tet-zu/laravel-telegram-notifier.git"
        }
    ]

**Step 2: Run** "composer require pdffiller/pdffiller/laravel-telegram-notifier" **in command prompt**

**Step 3: Add to \config\app.php** 'providers' => [... \pdffiller\LaravelTelegramNotifier\LaravelTelegramNotifierServiceProvider::class

**Step 4: Add to .env correct Chat_id and  Telegram_Token**
		TELEGRAM_TOKEN =**********
		CHAT_ID = =**********	
**Step 5: Edit App/Exceptions/Handler.php**
	Change  
		  public function report(Exception $exception)
			{
				parent::report($exception);
			}
	On
			public function report(Exception $exception)
			{
				(new TelegramNotifier("463719382:AAE_7nD1_CLw5JOI3TVtBJpN-uqFDHJnY3Q"))->Notify($exception->getMessage(),"");
			}