<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller {
    public function notify(NotificationService $service) {
        return $service->send("Nyckolas", "Sua compra foi confirmada!");
    }
}