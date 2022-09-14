<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class btm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'numeroLicencie' => '0123456789',
            'nomLicencie' => 'doe',
            'prenomLicencie' => 'john',
            'email' => 'john.doe@gmail.com',
            'password' => 'root'
        ]);
    }
}
