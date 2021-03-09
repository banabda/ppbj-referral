<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vd = User::firstOrCreate([
            'email' => 'admin@lpkn.org',
        ],
        [
        	'name' => 'Admin LPKN',
        	'password' => Hash::make('adminlpkn123')
        ]);
        $vd->assignRole('admin');
    }
}
