<?php

namespace App\Http\Controllers;

use App\Services\GreetingService;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index(GreetingService $greeter) {
        $user = "Nyckolas"; 
        $greetingMessage = $greeter->getGreeting();
        return "Olá, ($user)! Tenha um(a) ótimo(a) ($greetingMessage)";
    }
}