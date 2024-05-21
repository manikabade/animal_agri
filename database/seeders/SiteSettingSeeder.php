<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('site_settings')->insert([
            [
                'Title'                 => 'Agri',
                'alias'                 => 'Agri',
                'working_day'           => 'Sunday',
                'working_time'          => '10:00AM-5:00PM',
                'closed_day'            => 'sunday',
                'closed_time'           => '6:00PM-9:00AM',
                'description'           => 'Agri',
                'email'                 =>'agri@gmail.com',
                'phone'                 =>'0123455897',
                'copyright'             =>'Agri',
                'facebook'              =>'www.facebook.com',
                'twitter'               =>'www.twitter.com',
                'youtube'               =>'www.youtube.com',
                'insta'                 =>'www.insta.com',
                'footer_text'           =>'Agri',
                'logo'           =>'logo.png',
                'photo'           =>'photo.png',
            ],
        ]);
    }
}

