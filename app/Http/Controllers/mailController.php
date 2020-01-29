<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\User;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Sarthak'], function ($message) {

            $message->to('itBlogSupp@gmail.com', 'To itBlogSupp')->subject('Test Email');
            $message->from('itBlogSupp@gmail.com', 'itBlogSupp');
        });
    }

}
