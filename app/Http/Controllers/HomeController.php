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
    private array $defaults = [
        'about'    => ['eyebrow' => '', 'heading' => '', 'body' => ''],
        'equity'   => ['eyebrow' => '', 'heading' => '', 'body' => ''],
        'services' => ['eyebrow' => '', 'heading' => '', 'body' => ''],
        'cta'      => ['eyebrow' => '', 'heading_white' => '', 'heading_teal' => '', 'description' => '', 'cta1_text' => '', 'cta1_url' => '#', 'cta2_text' => '', 'cta2_url' => '#'],
        'footer'   => ['description' => '', 'email' => '', 'phone' => '', 'address' => '', 'linkedin_url' => '#', 'instagram_url' => '#', 'crunchbase_url' => '#', 'mail_url' => '#'],
        'services' => ['eyebrow' => '', 'heading' => '', 'desc1' => '', 'desc2' => ''],
    ];

    private function section(string $name): array
    {
        return array_merge($this->defaults[$name] ?? [], Setting::section($name));
    }

    public function index()
    {
        return view('home', [
            'impactStats'     => ImpactStat::orderBy('order')->get(),
            'services'        => Service::orderBy('order')->get(),
            'servicesSection' => $this->section('services'),
            'portfolioItems'  => PortfolioItem::orderBy('order')->get(),
            'teamMembers'     => TeamMember::orderBy('order')->get(),
            'sponsors'        => Sponsor::orderBy('order')->get(),
            'hero'            => $this->section('hero'),
            'about'           => $this->section('about'),
            'equity'          => $this->section('equity'),
            'cta'             => $this->section('cta'),
            'footer'          => $this->section('footer'),
        ]);
    }
}
