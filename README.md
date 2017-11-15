# Simple PHP Telegram Bot

A simple class to interact with a telegram bot, and make it awnser to commands

This class was created with colaboration of [waterblue](https:/ldrsousa.com)

**The host must support HTTPS in order for this to work.**

###Create Telegram Bot

Start a conversation with the *BotFather*:

```
GLOBAL SEARCH -> BotFather
```

> **BotFather**: The *BotFather* is the one bot to rule them all. Use it to create new bot accounts and manage your existing bots.


Create a new bot:

`/newbot`

Choose a user-friendly name for your bot, for example:

`Notifier`

Choose a unique username for your bot (must ends with “bot”), for example:

`notifier_bot`

Once the bot is created, you will get a token to access the Telegram API.

> TOKEN: The token is a string that is required to authorize the bot and send requests to the Telegram API, e.g. 4334584910:AAEPmjlh84N62Lv3jGWEgOftlxxAfMhB1gs


###Get The Chat ID

> CHAT_ID: To send a message through the Telegram API, the bot needs to provide the ID of the chat it wishes to speak in. The chat ID will be generated once you start the first conversation with your bot.

Start a conversation with your bot:

`🔍 GLOBAL SEARCH -> MY_BOT_NAME -> START`

Send the /start command:

`/start`

To get the chat ID, open the following URL in your web-browser: https://api.telegram.org/bot**TOKEN**/getUpdates (replace **«TOKEN»** with your bot token).


###Edit conf.php file and upload

Rename the conf.example.php file to conf.php and put your bot token that you got and if you want your bot to awnser to anyone change to **FALSE** the onlytrusted parameter, otherwise add your chatid to the trusted array.

Upload the files to your host (I recommend creating a unique directory name, you can use an MD5 hash of a string of your choise, for example: 5277d6cf9f917a1da0ef9e55f3ae9f8f)


###Set the Webhook

To set the webhook to your telegram bot you only need to access the following url with the bot token and the url to your webhook. https://api.telegram.org/bot<bot token>/setwebhook?url=https://example.domain/path/to/bothook.php

example: 
´´´
https://api.telegram.org/bot4334584910:AAEPmjlh84N62Lv3jGWEgOftlxxAfMhB1gs/setwebhook?url=https://yourdomain.com/5277d6cf9f917a1da0ef9e55f3ae9f8f/bothook.php
´´´

More help on how to create a webhook [here](https://core.telegram.org/bots/webhooks).



Have fun!