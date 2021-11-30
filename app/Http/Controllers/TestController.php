<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $name = 'Marlon';
        $city = 'Düsseldorf';
        $age = 18;

        $userList = [
            [
                'name' => 'Max Mustermann',
                'city' => 'Berlin',
            ],
            [
                'name' => 'Marlon Basten',
                'city' => 'Düsseldorf',
            ],
        ];

        return view('test')
            ->with(compact('name', 'city', 'age', 'userList'));
    }

    public function welcome(string $name = null)
    {
        if (!$name) {
            return 'Bitte gebe deinen Namen an.';
        }
        return 'Willkommen, '.$name;
    }
}
