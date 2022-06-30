<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactUs as MailContactUs;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function storeContactForm(ContactRequest $request)
    {
        try {
            $created_data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
                'g-recaptcha-response' => $request->input('g-recaptch-response'),
            ];

       
            // Start the transaction
            DB::transaction(function () use ($created_data) {
                // Save in DB :
                Contact::create($created_data);

                // Send email :
                Mail::to('haneen.khairi96@gmail.com')->send(new MailContactUs($created_data));


            });
            return redirect()->back()->with('success', 'It has been sent successfully');
        } catch (\Throwable $th) {
          return $th;
        }

    }

}
