<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MessageController extends Controller
{
    public function time($time)
    {
        switch ($time) {
            case 'morning':
                return view('message.morning');
                break;
            case 'afternoon':
                return view('message.afternoon');
                break;
            case 'evening':
                return view('message.evening');
                break;
            case 'night':
                return view('message.night');
                break;
            case 'random':
                $randoms = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
                return view('message.random', ['random' => $randoms[array_rand($randoms, 1)]]);
        }
    }

    public function word($word)
    {
        return view('message.word', ['word' => $word]);
    }
}
