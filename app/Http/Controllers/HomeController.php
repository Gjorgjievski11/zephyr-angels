<?php

namespace App\Http\Controllers;

use App\Models\ImpactStat;
use App\Models\PortfolioItem;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", [
            'impactStats'    => ImpactStat::orderBy('order')->get(),
            'services'       => Service::orderBy('order')->get(),
            'portfolioItems' => PortfolioItem::orderBy('order')->get(),
            'teamMembers'    => TeamMember::orderBy('order')->get(),
            'sponsors'       => Sponsor::orderBy('order')->get(),
        ]);
    }
}
