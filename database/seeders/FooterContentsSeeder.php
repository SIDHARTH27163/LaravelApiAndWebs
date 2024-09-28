<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FooterContent;
class FooterContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FooterContent::create([
            'type' => 'privacy-policy',
            'content' => 'This is the Privacy Policy content. Your privacy is important to us. We will not share your personal information with any third parties without your consent...'
        ]);

        FooterContent::create([
            'type' => 'terms-and-conditions',
            'content' => 'These are the Terms and Conditions. By using our website, you agree to comply with and be bound by the following terms...'
        ]);

        FooterContent::create([
            'type' => 'about-us',
            'content' => 'This is the About Us content. We are a team of professionals dedicated to providing the best services to our clients. Our goal is to deliver exceptional value...'
        ]);

        FooterContent::create([
            'type' => 'disclaimer',
            'content' => 'This is the Disclaimer content. All information on this website is provided as-is, with no guarantees of accuracy or completeness...'
        ]);
    }
}
