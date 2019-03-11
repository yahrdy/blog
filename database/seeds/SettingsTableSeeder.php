<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>"Laravel's Blog",
            'address'=>'Dhaka, Bangladesh',
            'contact_number'=>'01521330457',
            'contact_email'=>'info@dearschool.org',
        ]);
    }
}
