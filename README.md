# Freshping to discord

This is a webhook that can be used for [Freshping](freshping.io). When Freshping fires an alert, you can specify a discord channel which receives the alert.

## Installation

1. Run `composer create-project michaelbelgium/freshping-discord` 
1. Add a `DISCORD_TOKEN` and `DISCORD_CHANNEL` in the defines, in `webhook.php`
1. Log in into your freshping account
1. Go to the integrations page
1. Add a webhook that links to `webhook.php` of your website.