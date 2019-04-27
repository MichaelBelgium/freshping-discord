<?php

include __DIR__.'/vendor/autoload.php';

use RestCord\DiscordClient;

define("DISCORD_TOKEN", null);
define("DISCORD_CHANNEL", null);

$json_data = file_get_contents("php://input");

if (empty($json_data) || empty(DISCORD_CHANNEL) || empty(DISCORD_TOKEN))
    die();

$response = new FreshpingResponse($json_data);
$client = new DiscordClient(['token' => DISCORD_TOKEN]);

$message = ":bell: **" . $response->getWebhookEventData()->getCheckName() . ":** " . 
           $response->getWebhookEventData()->getCheckStateName() . " (" .
           (new DateTime())->format('Y-m-d H:m:i') . ")";

$client->channel->createMessage([
    'channel.id' => DISCORD_CHANNEL,
    'content' => $message
]);
?>