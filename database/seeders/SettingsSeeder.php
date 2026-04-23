<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'hero' => [
                'eyebrow'       => 'NON-EXCLUSIVE ANGEL INVESTING NETWORK',
                'heading_teal'  => 'Starting Capital',
                'heading_white' => 'for Brave Founders',
                'description'   => 'We connect Macedonian and Southeast European tech-based startups with experienced investors to fuel innovation at the earliest pre-seed and seed stages',
                'cta1_text'     => 'Pitch your startup',
                'cta1_url'      => '#',
                'cta2_text'     => 'Join as an Angel Investor',
                'cta2_url'      => '#',
            ],
            'about' => [
                'eyebrow'    => 'ABOUT US',
                'heading'    => 'We Are Zephyr',
                'paragraph1' => 'Zephyr Angels is where bold founders meet smart capital.',
                'paragraph2' => 'We\'re an angel investor network backing early-stage startups with the ambition to scale fast and win big. Beyond funding, we bring hands-on support, sharp insights, and a powerful regional network that helps founders move faster, make better decisions, and unlock real growth.',
                'paragraph3' => 'We don\'t just invest - we activate! Through curated pitch events, fast-moving deal flow, and collaborative investing, we create momentum around the most promising startups in N. Macedonia & Southeast Europe.',
                'paragraph4' => 'At our core, Zephyr Angels is a community of operators, builders, and investors who believe in one thing: great companies are built together.',
            ],
            'services' => [
                'eyebrow'   => 'SERVICES',
                'heading'   => 'What We Offer',
                'desc1'     => 'Zephyr turns high-potential startups into investable opportunities, and connect them with the right capital, at the right time.',
                'desc2'     => 'From first pitch to closed deal, at Zephyr Angels we drive the full investment journey.',
            ],
            'equity' => [
                'eyebrow'    => 'ZEPHYR EQUITY',
                'heading'    => 'What is Zephyr Equity?',
                'paragraph1' => 'Zephyr Equity is the first Macedonian Special Purpose Vehicle (SPV) fully dedicated to startup investing, created as a natural evolution of the activities of Zephyr Angels. Built to bring more structure, professionalism, and speed into early-stage investments, Zephyr Equity introduces a new model of organized capital deployment in the local ecosystem. It focuses on co-investing in a select number of high-potential startups, combining capital with hands-on support, mentorship, and access to an established investor network.',
                'paragraph2' => 'More than just a funding vehicle, Zephyr Equity is designed as a bridge between regional founders and the global market. By activating both local and international investors, it enables startups to go beyond capital — unlocking access to expertise, strategic guidance, and cross-border opportunities.',
                'paragraph3' => 'The vision is long-term: to gradually scale the fund, strengthen the pipeline of globally competitive startups, and contribute to building a more mature, trust-driven investment ecosystem in North Macedonia and the SEE region, where ambitious companies can grow without needing to relocate abroad.',
            ],
            'cta' => [
                'eyebrow'       => 'JOIN US',
                'heading_white' => 'Ready to Build the Future',
                'heading_teal'  => 'Together?',
                'description'   => 'Whether you\'re a founder with a bold vision or an investor looking for the next breakthrough — we\'d love to hear from you.',
                'cta1_text'     => 'Pitch your startup',
                'cta1_url'      => '#',
                'cta2_text'     => 'Join as an Angel Investor',
                'cta2_url'      => '#',
            ],
            'footer' => [
                'description'    => 'A non-exclusive angel network backing bold tech-based Macedonian and Southeast European founders at pre-seed and seed stages.',
                'email'          => 'info@zephyr.mk',
                'phone'          => '+389 70 789 466',
                'address'        => 'Boulevard "3rd Macedonian Brigade" No. 60, 1000 Skopje',
                'linkedin_url'   => '#',
                'instagram_url'  => '#',
                'crunchbase_url' => '#',
                'mail_url'       => '#',
            ],
        ];

        foreach ($data as $section => $keys) {
            foreach ($keys as $key => $value) {
                Setting::set($section, $key, $value);
            }
        }
    }
}
