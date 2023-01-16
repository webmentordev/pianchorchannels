<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle('PiAnchorChannel | Official Website');
        SEOMeta::setDescription('A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.');
        SEOMeta::setCanonical('https://pianchorchannel.com');
        SEOMeta::setRobots('index, follow');
        SEOMeta::addMeta('apple-mobile-web-app-title', 'PiAnchorChannel');
        SEOMeta::addMeta('application-name', 'PiAnchorChannel');

        OpenGraph::setTitle('PiAnchorChannel | Official Website');
        OpenGraph::setDescription('A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.'); 
        OpenGraph::setUrl('https://pianchorchannel.com');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'de');
        OpenGraph::setUrl('/');
        OpenGraph::addImage('https://pianchorchannel.com/assets/cover.png');
        OpenGraph::addImage('https://pianchorchannel.com/assets/cover.png', ['height' => 630, 'width' => 1200]);

        TwitterCard::setTitle('PiAnchorChannel | Official Website');
        TwitterCard::setSite('@pianchorchannel');
        TwitterCard::setType('card', 'summery');
        TwitterCard::setImage('https://pianchorchannel.com/assets/cover.png');

        JsonLd::setTitle('PiAnchorChannel | Official Website');
        JsonLd::setDescription('A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands.');
        JsonLd::addImage('https://pianchorchannel.com/assets/images/logo.png');
        JsonLd::setType('WebSite');
        JsonLd::addImage('https://pianchorchannel.com/assets/cover.png');
        return view('home');
    }
}
