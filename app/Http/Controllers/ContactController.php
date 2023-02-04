<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        SEOMeta::setTitle('Contact - PiAnchorChannel');
        SEOMeta::setDescription('Contact Pi Anchor Channels. A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.');
        SEOMeta::setCanonical('https://pianchorchannel.com/contact-us');
        SEOMeta::setRobots('index, follow');
        SEOMeta::addMeta('apple-mobile-web-app-title', 'PiAnchorChannel');
        SEOMeta::addMeta('application-name', 'PiAnchorChannel');

        OpenGraph::setTitle('Contact - PiAnchorChannel');
        OpenGraph::setDescription('Contact Pi Anchor Channels. A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.'); 
        OpenGraph::setUrl('https://pianchorchannel.com/contact-us');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'de');
        OpenGraph::setUrl('/');
        OpenGraph::addImage('https://pianchorchannel.com/assets/cover.png');
        OpenGraph::addImage('https://pianchorchannel.com/assets/cover.png', ['height' => 630, 'width' => 1200]);

        TwitterCard::setTitle('Contact - PiAnchorChannel');
        TwitterCard::setSite('@pianchorchannel');
        TwitterCard::setType('card', 'summery');
        TwitterCard::setImage('https://pianchorchannel.com/assets/cover.png');

        JsonLd::setTitle('Contact - PiAnchorChannel');
        JsonLd::setDescription('Contact Pi Anchor Channels. A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.');
        JsonLd::addImage('https://pianchorchannel.com/assets/images/logo.png');
        JsonLd::setType('WebSite');
        JsonLd::addImage('https://pianchorchannel.com/assets/cover.png');
        return view('contact');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    
        // Contact::create([
        //     'name' => $request->name,
        //     'subject' => $request->subject,
        //     'email' => $request->email,
        //     'message' => $request->message
        // ]);

        Mail::to("contact@webmentor.online")->send(new ContactEmail($request));
        
        return back()->with('success', "Message successfully sent!");
    }
}