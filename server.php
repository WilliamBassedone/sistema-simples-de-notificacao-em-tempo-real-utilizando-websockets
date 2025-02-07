<?php
require 'vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\App;

class NotificationServer implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->clients->attach($conn);
        echo "Nova conexão! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $data = json_decode($msg, true);

        if (isset($data['action']) && $data['action'] === 'add_notification') {
            // Enviar notificação para todos os clientes conectados
            foreach ($this->clients as $client) {
                $client->send(json_encode([
                    'type' => 'notification',
                    'message' => $data['message']
                ]));
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        $this->clients->detach($conn);
        echo "Conexão {$conn->resourceId} fechada\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Erro: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Criando o servidor WebSocket
$server = new App('localhost', 8080, '0.0.0.0');
$server->route('/ws', new NotificationServer, ['*']);
$server->run();
