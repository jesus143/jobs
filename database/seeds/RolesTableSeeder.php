<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\RoleUser;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cunter = 1;
        Role::whereNotNull('id')->delete();
        RoleUser::whereNotNull('id')->delete();

        $role = new Role();
    	$role->name = 'Jobseeker';
    	$role->save();

    	echo "$cunter. role: " . $role->name . " created.\n";

    	$role = new Role();
    	$role->name = 'Employer';
    	$role->save();
        $cunter++;

        echo "$cunter. role: " . $role->name . " created. \n";

    	$role = new Role();
    	$role->name = 'Administrator';
    	$role->save();
        $cunter++;

        echo "$cunter. role: " . $role->name . " created. \n";

    }
}
