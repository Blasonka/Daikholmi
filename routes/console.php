<?php

use Illuminate\Foundation\Inspiring;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('sitemap:generate', function () {
    SitemapGenerator::create(config('app.url'))
        ->writeToFile(public_path('sitemap.xml'));
})->describe('Generate the sitemap.');
