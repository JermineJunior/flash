<?php

namespace Tests\Feature;

use App\Admin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function user_table_check()
    {
        $this->assertTrue( 
            Schema::hasColumns('admins', [
                'id','firstname', 'email', 'email_verified_at', 'password'
                ]), 1);
                
    }
            
    /** @test*/
    public function users_can_not_view_admin_dashboard()
    {
        $user = factory('App\User')->create();
        $this->actingAs($user);
   
        $response = $this->get('/admin')
                ->assertStatus(302); 
    }

}
        