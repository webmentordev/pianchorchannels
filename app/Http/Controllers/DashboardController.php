<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class DashboardController extends Controller
{
    public function index(){
        SEOMeta::setTitle('Dashboard - PiAnchorChannel');
        return view('auth.dashboard', [
            'contacts' => Contact::latest()->paginate(30)
        ]);
    }
}
