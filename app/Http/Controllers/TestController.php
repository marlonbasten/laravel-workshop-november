<?php

namespace App\Http\Controllers;

use App\Jobs\BulkDeletePost;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function test()
    {
        $token = auth()->user()->createToken('Test token', [
            'post:list',
        ])->plainTextToken;
        dd($token);

        return $user->only(['name']);
    }

    public function welcome(string $name = null)
    {
        if (!$name) {
            return 'Bitte gebe deinen Namen an.';
        }
        return 'Willkommen, '.$name;
    }
}
