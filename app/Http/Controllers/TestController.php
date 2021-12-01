<?php

namespace App\Http\Controllers;

use App\Jobs\BulkDeletePost;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function test()
    {
        BulkDeletePost::dispatch([110, 111]);

        return 'mail gesendet';
    }

    public function welcome(string $name = null)
    {
        if (!$name) {
            return 'Bitte gebe deinen Namen an.';
        }
        return 'Willkommen, '.$name;
    }
}
