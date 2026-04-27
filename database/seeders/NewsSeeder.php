<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::create([
            'title' => 'Amur Udinus Mencapai 1 Miliar Penayangan di YouTube.',
            'category' => 'Pencapaian',
            'date' => '2027-03-15'
        ]);

        News::create([
            'title' => 'Rilis Spesial Ramadhan: Seluruh Juz Amma Telah Selesai.',
            'category' => 'Rilis',
            'date' => '2027-03-01'
        ]);

        News::create([
            'title' => 'Amur Udinus Berkolaborasi dengan Universitas di Seluruh Nusantara.',
            'category' => 'Kolaborasi',
            'date' => '2027-02-20'
        ]);
    }
}
