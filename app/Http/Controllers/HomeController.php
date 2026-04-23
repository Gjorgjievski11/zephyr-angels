<?php

namespace App\Http\Controllers;

use App\Models\ImpactStat;
use App\Models\PortfolioItem;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Sponsor;
use App\Models\TeamMember;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'impactStats'    => ImpactStat::orderBy('order')->get(),
            'services'       => Service::orderBy('order')->get(),
            'servicesSection' => Setting::section('services'),
            'portfolioItems' => PortfolioItem::orderBy('order')->get(),
            'teamMembers'    => TeamMember::orderBy('order')->get(),
            'sponsors'       => Sponsor::orderBy('order')->get(),
            'hero'           => Setting::section('hero'),
            'about'          => Setting::section('about'),
            'equity'         => Setting::section('equity'),
            'cta'            => Setting::section('cta'),
            'footer'         => Setting::section('footer'),
        ]);
    }
}
