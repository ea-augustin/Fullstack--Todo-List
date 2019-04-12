<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function send() {

      Mail::to('elidoom88@gmail.com')->send(new TestMail());
    }
}
