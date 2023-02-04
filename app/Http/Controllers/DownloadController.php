<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Mail\DownloadEmail;
use App\Models\EmailContact;
use Illuminate\Http\Request;
use App\Models\EmailContacts;
use Illuminate\Support\Facades\Mail;

class DownloadController extends Controller
{
   public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|max:255'
        ]);

        // EmailContact::create([
        //     'email' => $request->email
        // ]);
        
        Mail::to("contact@webmentor.online")->send(new DownloadEmail($request));

        return back()->with('email_success', 'Message sent! Our agent will contact you.');
    }
}
