<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $last_ref = "0BNTCV";

    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 1000; $i++){
            
            $ref = $this->generate_referral(6);

            User::firstOrCreate(
                ['email' => $faker->email],
                [
                    'name' => $faker->name,
                    'password' => Hash::make($ref),
                    'hp' =>"08387192083". $i,
                    'instansi' => "LPKN",
                    'ref' => $ref,
                    'ref_by' => $this->last_ref
                ]
            );

            $this->last_ref = $ref;
 
    	}
    }

    public function generate_referral($length){
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; 
        return substr(str_shuffle($str_result), 0, $length);
    }
}
