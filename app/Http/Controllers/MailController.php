<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Environment\Console;

class MailController extends Controller
{
    public function sendEMail(Request $request){

        $mailto = $request->input('mailto');
        $title = $request->input('title');
        $body = $request->input('body');

        $details = [
            'title' => $title,
            'body'  => $body
        ];

        Mail::to($mailto)->send(new TestMail($details));

        return redirect('mail')->with('status', 'Mail sent successfully');
    }
}
