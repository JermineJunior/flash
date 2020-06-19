<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
   use RefreshDatabase;

   /** @test */
   public function user_table_check()
   {
    $this->assertTrue( 
        Schema::hasColumns('users', [
           'id','name', 'email', 'email_verified_at', 'password'
           ]), 1);
        
   }

   /** @test */
   public function authentication_on_users()
   {
       $this->get('/home')
            ->assertRedirect('/login');
       $user = factory('App\User')->create();
       $this->actingAs($user);    
       
       $this->get('/home')->assertStatus(200);
   
   }

    /** @test */
    public function users_can_logout()
    {
        $this->signIn();

        $response = $this->post('/logout');

        $response = $this->get('/home')
                ->assertStatus(302);
    }

    protected function signIn()
    {
        $this->actingAs(factory(User::class)->create());
    }
}
