<?php
require 'vendor/autoload.php';

use WebSocket\Client;

try {
    $client = new Client("ws://localhost:8080/ws");
    
    $data = [
        'action' => 'add_notification',
        'message' => 'Nova tarefa adicionada!'
    ];

    $client->send(json_encode($data));
    echo "Notificação enviada!";
} catch (Exception $e) {
    echo "Erro ao conectar ao WebSocket: " . $e->getMessage();
}
