<?php


require 'vendor/autoload.php';

// Ahora puedes acceder a las clases de OpenAI
use OpenAI\Client;

$envFile = __DIR__ . "/.env";
$config = parse_ini_file($envFile);

$openaiKey = $config['KEY_OPENAI'];

$client = OpenAI::client($openaiKey);

$result = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'user', 'content' => 'Hello!'],
    ],
]);

echo $result->choices[0]->message->content; // Hello! How can I assist you today?
?>