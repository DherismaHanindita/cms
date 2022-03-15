<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'PASTA CAPELLINI',
            'slug' => 'item',
            'image' => 'thumb1',
            'content' => 'Ini adalah enis pasta Italia yang sangat tipis, dengan diameter antara 0,85 dan 0,92 milimeter. Seperti spageti, berbentuk batang, dalam bentuk untaian panjang. Seringkali dijual dalam bentuk seperti sarang. Capelli telah populer di Italia sejak setidaknya abad ke-14',
            'price' => 50.000,
            'draft' => 0
        ]);

        DB::table('posts')->insert([
            'name' => 'PASTA PILLUS',
            'slug' => 'item2',
            'image' => 'thumb2',
            'content' => 'Ini adalah berbagai pasta Italia tipis berbentuk pita yang disiapkan secara tradisional di Sardinia. Terbuat dari tepung gandum durum, garam, dan air hangat, pillus dipotong menjadi pita panjang dengan lebar sekitar 2 cm. Varietas pasta ini cocok dipadukan dengan berbagai macam saus, tetapi di Sardinia mereka sering dimasak dalam kaldu daging (biasanya yang dibuat dengan daging sapi), dikeringkan, dan disajikan dengan bumbu Pecorino Sardo parut dalam jumlah banyak .',
            'price' => 50.000,
            'draft' => 0
        ]);

        DB::table('posts')->insert([
            'name' => 'PASTA FUSILLI',
            'slug' => 'item3',
            'image' => 'thumb3',
            'content' => 'Ini adalah salah satu pasta yang bentuknya spiral. Fusili biasanya diolah dengan saus krim dan kacang polong. Fusili sendiri dapat dihidangkan dengan bahan lainnya seperti daging ayam, sayur-sayuran, sapi dan masih banyak lagi sesuai selera. Fusili biasanya terbuat dari tepung terigu',
            'price' => 50.000,
            'draft' => 0
        ]);


    }
}
