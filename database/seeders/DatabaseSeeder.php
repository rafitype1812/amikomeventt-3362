<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Utama
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event
        $categoryIT = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $categoryEnt = Category::firstOrCreate([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $categoryEsport = Category::firstOrCreate([
            'name' => 'E-Sport',
            'slug' => 'e-sport',
        ]);

        $categoryWorkshop = Category::firstOrCreate([
            'name' => 'Workshop Design',
            'slug' => 'workshop-design',
        ]);

        // 3. Insert Sampel Events (Minimal 6)
        Event::create([
            'category_id' => $categoryEnt->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2025-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        Event::create([
            'category_id' => $categoryIT->id,
            'title' => 'Hackathon - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
            'date' => '2025-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $categoryIT->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        Event::create([
            'category_id' => $categoryEsport->id,
            'title' => 'E-Sport U-Champ Valorant',
            'description' => 'Turnamen tingkat universitas terbesar tahun ini. Buktikan timmu adalah yang terbaik!',
            'date' => '2026-06-15 08:00:00',
            'location' => 'E-Sport Arena Amikom',
            'price' => 75000,
            'stock' => 32,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $categoryWorkshop->id,
            'title' => 'UI/UX Masterclass 2026',
            'description' => 'Belajar langsung merancang UI/UX yang memukau dari praktisi industri berpengalaman.',
            'date' => '2026-07-20 09:00:00',
            'location' => 'Ruang CITRA 1',
            'price' => 100000,
            'stock' => 50,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $categoryEnt->id,
            'title' => 'Amikom Music Fest',
            'description' => 'Festival musik tahunan merayakan kreativitas mahasiswa dengan berbagai bintang tamu menarik.',
            'date' => '2026-08-10 18:00:00',
            'location' => 'Lapangan Basket',
            'price' => 35000,
            'stock' => 500,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}
