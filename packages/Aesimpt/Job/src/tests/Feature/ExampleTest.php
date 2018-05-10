<?php

namespace Tests\Feature;

use App\Role;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;
use App\App;





class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPages()
    {
        // home page
        $response = $this->get('/');
        $response->assertStatus(200);

        // login page
        $response = $this->get('/login');
        $response->assertStatus(200);

        // register page
        $response = $this->get('/register');
        $response->assertStatus(200);

        // forgot passowrd page
        $response = $this->get('/password/reset');
        $response->assertStatus(200);

        // login user as administrator
        $user = User::find(1);
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);

        // login user as employer
        $user = User::find(6);
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);

        // login user as jobseeker
        $user = User::find(7);
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(200);
    }

    public function testLoginAsJobseeker()
    {
        // Create new user, assign to a role jobseeker and login
        $jobseeker = Role::where('name', 'Jobseeker')->first();
        $user = factory(User::class)->create();
        $user->roles()->attach($jobseeker->id);
        $response = $this->actingAs($user)
            ->get('/');
        $response->assertStatus(200);

        $user->delete();
    }
    public function testLoginAsEmployer()
    {
        // Create new user, assign to a role employer and login
        $employer = Role::where('name', 'Employer')->first();
        $user = factory(User::class)->create();
        $user->roles()->attach($employer->id);

        $response = $this->actingAs($user)
            ->get('/');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
            ->get('/employer/profile/overview');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
            ->get('/employer/profile/edit/about');
        $response->assertStatus(200);
        $response->assertStatus(200);

        $response = $this->actingAs($user)
            ->get('/employer/profile/signup/basic-information');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
            ->get('/employer/profile/signup/image-and-video');
        $response->assertStatus(200);

        $response = $this->actingAs($user)
            ->get('/employer/profile/signup/preview');
        $response->assertStatus(200);

        $user->delete();
    }

    public function testLoginAsAdministrator()
    {
        // Create new user, assign to a role administrator and login
        $administrator = Role::where('name', 'Administrator')->first();
        $user = factory(User::class)->create();
        $user->roles()->attach($administrator->id);
        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->get('/');
        $response->assertStatus(200);

        $user->delete();
    }
}
