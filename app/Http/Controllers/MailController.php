<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function send_email(Request $request)
    {
        //  data to view
        $data = [
            'name' => "{$request->responsible_person}",
            'form' => $request->all()
        ];

        //  send email to studija.it
        Mail::send('emails.studijas', $data, function ($message) use ($request) {
            $message->to(config('mail.from.address'), config('mail.from.name'))
                ->from("{$request->email}", "{$request->responsible_person} ({$request->legal_name} - {$request->legal_nr})")
                ->subject("ONLINE: {$request->legal_name} ({$request->legal_nr})");
        });

        //  send email to client
        Mail::send('emails.klienta', $data, function ($message) use ($request) {
            $message->to("{$request->email}", "{$request->responsible_person} ({$request->legal_name})")->subject("{$request->legal_name} ({$request->legal_nr})");
        });

        //  return json response
        return response()->json(['status' => TRUE]);
    }
}
