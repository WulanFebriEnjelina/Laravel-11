<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Distributor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('123456789'),
            'point' => '10000',
        ]);

        Admin::create([
            'name' => 'admin2',
            'username' => 'Admin',
            'email' => 'admin2@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        Distributor::create([
            'nama_distributor' => 'PT.Daun Emas',
            'kota' => 'Pekanbaru',
            'provinsi' => 'Riau',
            'kontak' => ('081344332211'),
            'email' => 'daunemas@gmail.com',
        ]);
        Distributor::create([
            'nama_distributor' => 'PT.Telur Emas',
            'kota' => 'Bengkalis',
            'provinsi' => 'Riau',
            'kontak' => ('082244332211'),
            'email' => 'teluremas@gmail.com',
        ]);
    }
}
