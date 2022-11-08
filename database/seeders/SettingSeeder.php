<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([

            'email'=>'contact@email.com',
            'phone'=>'017346602477',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'',
            'instagram'=>'',
            'linkedin'=>'',
            'youtube'=>'',

        ]);
    }
}
