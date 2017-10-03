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
	```php
	 public function report(Exception $exception)
    {
        parent::report($exception);
    }
	```
	On
	```php
	 public function report(Exception $exception)
    {
		//Optionally You can add TELEGRAM_TOKEN and Chat_id into the constructor
        (new TelegramNotifier())->Notify($exception->getMessage(),"");
    }
	```
	
	