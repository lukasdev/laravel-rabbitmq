<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\TestJob;

class HomeController extends Controller
{
    public function index(){
        $mensagem = [
            'nome' => 'Lucas Silva',
            'email' => 'dev.lucassilva@gmail.com'
        ];

        TestJob::dispatch(json_encode($mensagem))->onQueue('teste');
    }
}
