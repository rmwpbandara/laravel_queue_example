<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailExample;

class SendMailExampleController extends Controller
{
    public function sendMail()
    {
        Mail::to('rmwpbandara@gmail.com')
        ->cc(['wasantha.dsg@gmail.com'])
        ->queue(new SendMailExample( [
            'subject'=>'Abstract'
        ]));
    }
}
