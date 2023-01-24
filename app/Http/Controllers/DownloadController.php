<?php

namespace App\Http\Controllers;

use App\Models\EmailContact;
use Illuminate\Http\Request;
use App\Models\EmailContacts;

class DownloadController extends Controller
{
   public function store(Request $request){
        $this->validate($request, [
            'emial' => 'required|max:255'
        ]);

        EmailContact::create([
            'email' => $request->email
        ]);
        
        return response()->json([
            'status' => "success",
            "message" => "Message sent! Our agent will contact you."
        ]);
    }
}
