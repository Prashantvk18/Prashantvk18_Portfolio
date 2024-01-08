<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Mail;
use App\Mail\SendMail;


class SendMailController extends Controller
{
    public function send_mail(Request $request) {
        $request->validate([
        'name' => 'required|string|max:20',
        'email' => 'required',
        'subject' => 'required',
        'body' => 'required',
        ]);
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mailBody = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'body' => $request->body,
            ];
            $to = 'prashantjainvk18@gmail.com'; // Replace with the recipient's email address
            Mail::to($to)->send(new SendMail($mailBody));
            return redirect('/');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

}
