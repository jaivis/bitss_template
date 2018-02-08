<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function send_email()
    {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('aivis.jansauskis@live.com', 'Klient name')
                ->subject('Laravel Basic Testing Mail')
                ->from('info@bitss.lv', 'info@bitss.lv epasts');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
