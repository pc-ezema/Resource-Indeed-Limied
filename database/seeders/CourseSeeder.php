<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createCourses = [
            [
                'name' => "LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE’S SERVICES (ENGLAND) (RQF) - 9-12 Months",
                'price' => 1500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => "LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR RESIDENTIAL CHILDCARE - 9-12 Months",
                'price' => 1500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => "LEVEL 5 DIPLOMA IN LEADERSHIP AND MANAGEMENT FOR ADULT CARE - 9-12 Months",
                'price' => 1500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => "LEVEL 5 DIPLOMA IN LEADERSHIP FOR HEALTH AND SOCIAL CARE AND CHILDREN AND YOUNG PEOPLE'S SERVICES (ENGLAND) (CHILDREN AND YOUNG PEOPLE'S MANAGEMENT) - 9-12 Months",
                'price' => 1500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 5 DIPLOMA IN EDUCATION AND TRAINING - 9-12 Months',
                'price' => 1500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 3 DIPLOMA IN ADULT CARE - 4-6 Months',
                'price' => 1200,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => "FOCUS AWARDS LEVEL 3 DIPLOMA FOR THE CHILDREN AND YOUNG PEOPLE’S WORKFORCE (RQF) - 9-12 Months",
                'price' => 1800,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 DIPLOMA IN CARE - 3-4 Months',
                'price' => 750,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 FUNCTIONAL SKILLS IN MATH - 55 Hours',
                'price' => 500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 FUNCTIONAL SKILLS IN ENGLISH - 55 Hours',
                'price' => 500,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 3 AWARD IN EMERGENCY FIRST AID AT WORK - 1 Day',
                'price' => 90,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 3 AWARD IN FIRST AID AT WORK - 3 Days',
                'price' => 90,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 3 AWARD IN PAEDIATRICS FIRST AID - 2 Days',
                'price' => 90,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 SAFEGUARDING OF CHILDREN - 3 Months',
                'price' => 150,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 FOOD HYGIENE - 4 Weeks',
                'price' => 100,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => "UNDERSTAND HOW TO SET UP A HOME-BASED CHILDCARE SERVICE + Safeguarding children + Food Hygiene - 4 Weeks",
                'price' => 850,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 3 AWARD IN EMERGENCY PAEDIATRICS FIRST AID - 1 Day',
                'price' => 90,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'HEALTH AND SOCIAL CARE MANDATORY TRAINING - 1 Day',
                'price' => 90,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 AWARD FOR WORKING AS A SECURITY OFFICER WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 6 Days',
                'price' => 400,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 AWARD FOR WORKING AS A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 6 Days',
                'price' => 400,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'LEVEL 2 AWARD FOR UPSKILLING A DOOR SUPERVISOR WITHIN THE PRIVATE SECURITY INDUSTRY + FIRST AID - 3 Days',
                'price' => 400,
                'created_at' => now(),
                'updated_at' =>now()
            ],
            [
                'name' => 'PREVENTION AND MANAGEMENT OF VIOLENCE AND AGGRESSION (PMVA) - 3 Days',
                'price' => 400,
                'created_at' => now(),
                'updated_at' =>now()
            ]
        ];

        Course::insert($createCourses);
    }
}
