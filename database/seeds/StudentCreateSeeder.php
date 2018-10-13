<?php

use Illuminate\Database\Seeder;

class StudentCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
              'name' => 'Hasan',
              'email' => 'saifur.dohs@gmail.com',
              'mobile' => '017222222',
              'gender' => 'male',
              'group_name' => 'CTG-167'
          ],
            [
                'name' => 'Hasan 2',
                'email' => 'saifur2.dohs@gmail.com',
                'mobile' => '0172223222',
                'gender' => 'male',
                'group_name' => 'CTG-167'
            ],
            [
                'name' => 'Hasan3',
                'email' => 'saifur3.dohs@gmail.com',
                'mobile' => '0173222222',
                'gender' => 'male',
                'group_name' => 'CTG-167'
            ]
        ];

        foreach ($students as $student){
            \App\Models\Student::create($student);
        }
    }
}
