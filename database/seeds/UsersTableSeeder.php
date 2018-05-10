<?php
use  Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Faker\Factory as Faker;

use \Aesimpt\Job\Model\Job;
use \Aesimpt\Job\Model\JobUser;
use \Aesimpt\JobMessaging\Model\JobMessage;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::whereNotNull('id')->delete();
        Job::whereNotNull('id')->delete();
        JobUser::whereNotNull('id')->delete();
        JobMessage::whereNotNull('id')->delete();

        $employer = Role::where('name', 'Employer')->first();
        $jobseeker = Role::where('name', 'Jobseeker')->first();
        $administrator = Role::where('name', 'Administrator')->first();
        $counter = 3;


         factory(App\User::class, 10)->create()->each(function($user, $index) use ($employer, $jobseeker, $administrator, $counter){


            $counter++;
            $role = '';
            switch ($index) {
                case 1:
                case 2:
                case 3:
                    $user->roles()->attach($administrator->id);
                    $role = $administrator->name;
                break;
                case 4:
                case 5:
                case 6:
                    $user->roles()->attach($employer->id);
                    $role = $employer->name;

                // Add jobs to employer

                    // Employee to sepcific jobs

                    // Add sample messages to employee


                    break;
                default:
                    $user->roles()->attach($jobseeker->id);
                    $role = $jobseeker->name;

                    break;
            }

             echo "$counter. User created: " . $user->email . " |  pass: secret | " . " User role assigned: " . $role . "\n";
         });



        $faker = Faker::create();

        $jobSeekers = App\User::whereHas('roles', function($query){
            $query->where('name', 'Jobseeker');
        })->get();

        $employers = App\User::whereHas('roles', function($query){
            $query->where('name', 'Employer');
        })->get();




        // Initialized jobs variables and info

         foreach($employers as $employer) {

             echo " Create job for : " . $employer->email . " \n";

             $totalJob = rand(5, 10);

             for($i=0; $i<$totalJob; $i++) {
                 $jobType = ['Full Time', 'Part Time', 'Contractual', 'Project Base'];
                 $skills = [];
                 $status = ['active', 'completed', 'draft', 'archived'];

                 // compose skills as string
                 for($j = 0; $j < rand(1, 10); $j++) {
                     $skills[] = $faker->jobTitle;
                 }

                 // Add new job for employer
                 $job = new Job();
                 $job->employer_id = $employer->id;
                 $job->title =  $faker->sentence;
                 $job->description = $faker->paragraph();
                 $job->position = $faker->sentence;
                 $job->salary = rand(100, 500) ;
                 $job->skills = json_encode($skills);
                 $job->type = $jobType[rand(0, count($jobType)-1)];
                 $job->hours =  rand(30, 100) . ' hrs per week';
                 $job->status = $status[rand(0, count($status)-1)];

                 $job->save();

                 echo " Job created: " . $job->position . " \n ";

                 $status = ['active', 'completed', 'disputed', 'discontinued', 'invited', 'bookmarked', 'archived', 'archived applicant', 'applied'];

                 // Add employee to each jobs
                 foreach($jobSeekers as $jobSeeker) {


                     if (rand(1, 2) == 1) {
                         $jobUser = new JobUser();
                         $jobUser->job_seeker_id = $jobSeeker->id;
                         $jobUser->job_id = $job->id;
                         $jobUser->status = $status[rand(0, count($status)-1)];
                         $jobUser->description = $faker->paragraph();

                         $jobUser->save();

                        // Add messages to employee and employer for the specific job
                         $totalMessages = 3; //rand(1,5);
                         for($i=0; $i<$totalMessages; $i++) {
                             // Employer send message
                             $jobMessage = new JobMessage();
                             $jobMessage->job_user_id = $jobUser->id;
                             $jobMessage->sender_id = $employer->id;
                             $jobMessage->receiver_id = $jobSeeker->id;
                             $jobMessage->content = $faker->paragraph();
                             $jobMessage->save();

                             // Employer send response message
                             $jobMessage = new JobMessage();
                             $jobMessage->job_user_id = $jobUser->id;
                             $jobMessage->sender_id = $jobSeeker->id;
                             $jobMessage->receiver_id = $employer->id;
                             $jobMessage->content = $faker->paragraph();
                             $jobMessage->save();
                         }

                         echo " jobseeker applied to the job " . $jobSeeker->email . " | with  " . ($totalMessages * 2) . " messages with employer \n ";


                     } // end if for jobseeker



                 } // end job seeker


                 echo " --------------------------------------------------------------\n ";

             } // end for loop employer


             echo " Total job created " . $totalJob . " \n ";


         } // end employer foreach
    }
}
