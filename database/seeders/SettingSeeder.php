<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = Setting::create([
            'nama_website' => 'Website',
            'seo_description' => 'Description',
            'seo_keyword' => 'Keyword',
            'seo_author' => 'Author',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'footer' => 'Copyright © 2022. All Rights Reserved.'
        ]);
    }
}
