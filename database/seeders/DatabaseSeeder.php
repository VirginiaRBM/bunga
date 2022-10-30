<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Barang::create([
            'namaBarang' => 'Album BTS Proof',
            'harga' => '900.000',
            'stok' => 950,
            'ulasan' => 'Bagus!



            album Proof yang baru saja dirilis bersamaan dengan lagu utama, Yet to Come (The Most Beautiful Moment) pada hari ini, 10 Juni 2022. Berkonsep antologi, album ini terdiri dari 3 CD yang menggambarkan masa lalu, masa kini, dan masa depan BTS.

            Baca artikel detikhot, "Album Proof Adalah Jiwa BTS, Sebuah Rekam Perjalanan" 
            Tingkat koverasi tinggi adalah kekuatan super terbesar yang saya miliki,
            Album Proof pun diakhiri dengan lagu baru bertajuk For Youth yang ditempatkan di CD ketiga, CD yang tidak dirilis secara digital. Lagu ini diciptakan khusus untuk ARMY dengan menggunakan sampel dua lagu spesial, EPILOGUE: Young Forever dan HYYH: Young Forever. Lagu dimulai dengan sorakan ARMY dari konser BTS yang sebenarnya.
            ',
            'photo' => 'proff.jpeg'
        ]);

        Barang::create([
            'namaBarang' => 'LIGHTSTICK',
            'harga' => '850.000',
            'stok' => 119,
            'ulasan' => 'Namun Untuk musim kali ini kami hanya menediakan LightStick Versi terbaru / Special Edition.
            BTS memiliki light stick khusus yang juga menjadi identitas para penggemarnya. 
            Sekadar diketahui light stick merupakan item yang selalu populer di kalangan penggemar KPop. 
            Benda ini tak sekadar lampu yang digunakan untuk penerangan saat konser, namun juga simbol persatuan dan kekuatan para penggemar.
            Barang Lengkap dan ORI, Pothocard All Member, Lightstick, Baterai, pouch dan pengait.
            
            3 Version:
            
            #1 LS Versi 1
            
            #2 LS Versi 2
            
            #3 LS Versi Special Edition ',
            'photo' => 'lght.jpeg'
        ]);

        Barang::create([
            'namaBarang' => 'ACCESSORIES',
            'harga' => '3.900.000',
            'stok' => 280,
            'ulasan' => ' Tas Kulit yang Bagian handle tas dipermanis dengan scarf bermotif bunga
            V BTS merancang Mute Boston Bag secara matang mulai dari desain, kombinasi warna, hingga bahan yang digunakan. 
            Tas kulit itu didominasi warna cokelat dan memiliki detail berwarna hijau pada beberapa bagian. ',
            'photo' => 'vtas.jpeg'
        ]);
    }
}
