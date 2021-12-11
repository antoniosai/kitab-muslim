<?php

namespace Database\Seeders;

use App\Models\Kitab;
use Illuminate\Database\Seeder;

class KitabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['judul' => 'Musnad Ahmad', 'slug' => 'musnad_ahmad'],
            ['judul' => 'Musnad Darimi', 'slug' => 'musnad_darimi'],
            ['judul' => 'Musnad Syafii', 'slug' => 'musnad_syafii'],
            ['judul' => 'Muwatho Malik', 'slug' => 'muwatho_malik'],
            ['judul' => 'Riyadhus Shalihin', 'slug' => 'riyadhus_shalihin'],
            ['judul' => 'Shahih Bukhari', 'slug' => 'shahih_bukhari'],
            ['judul' => 'Shahih Muslim', 'slug' => 'shahih_muslim'],
            ['judul' => 'Sunan Abu Daud', 'slug' => 'sunan_abu_daud'],
            ['judul' => 'Sunan Ibnu Majah', 'slug' => 'sunan_ibnu_mahah'],
            ['judul' => 'Sunan Nasai', 'slug' => 'sunan_nasai'],
            ['judul' => 'Sunan Tirmidzi', 'slug' => 'sunan_tirmidzi'],
        ];

        foreach ($data as $l_kitab) {
            $kitab = Kitab::firstOrNew(['slug' => $l_kitab['slug']]);
            $kitab->judul = $l_kitab['judul'];
            $kitab->slug = $l_kitab['slug'];
            $kitab->save();
        }
    }
}
