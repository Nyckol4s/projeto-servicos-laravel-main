<?php

namespace App\Services;

class NotificationService {
    public function send($user, $message) {
        // Em um caso real, aqui estaria a lógica para enviar um e-mail, SMS, etc.
        return "Notificação enviada para Nyckolas: ($message)";
    }
}