<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Carbon\Carbon;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Education::factory()->count(15)->create();
        DB::table('education')->insert(
            [
                [
                    'user_id'=>1,
                    'school_name'=>'University of Nairobi',
                    'school_location'=>'Nairobi',
                    'degree'=>'Bachelors',
                    'field_of_study'=>'Software Engineering',
                    'graduation_start_date'=>Carbon::now(),
                    'graduation_end_date'=>Carbon::now()
                ],
                [
                    'user_id'=>1,
                    'school_name'=>'University of Rwanda',
                    'school_location'=>'Nyarugenge, Kigali, Rwanda',
                    'degree'=>'Masters',
                    'field_of_study'=>'Cyber Security',
                    'graduation_start_date'=>Carbon::now(),
                    'graduation_end_date'=>Carbon::now()
                ],
                [
                    'user_id'=>1,
                    'school_name'=>'University of Nairobi',
                    'school_location'=>'Nairobi',
                    'degree'=>'Bachelors',
                    'field_of_study'=>'Software Engineering',
                    'graduation_start_date'=>Carbon::now(),
                    'graduation_end_date'=>Carbon::now()
                ],
            ]
        );
    }
}
