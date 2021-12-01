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

    public function toAdmin()
    {
        if (!session()->exists('previous_user_id')) {
            abort(403);
        }

        $previous_user_id = session()->get('previous_user_id');
        $user = User::find($previous_user_id);

        \Auth::login($user);

        session()->remove('previous_user_id');

        return redirect()->route('home');
    }
}
