<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\{ Admin , Author};
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function table_is_set_up()
    {
        $this->assertTrue( 
            Schema::hasColumns('authors', [
               'id','name','nick_name'
               ]), 1);
    }

    /** @test */
    public function non_admins_cant_view_admins()
    {
       $this->get('/authors')
       ->assertRedirect('/admin/login');

       $this->actingAs(factory('App\User')->create());
       
       $this->get('/authors')
       ->assertRedirect('/admin/login');
    }

    /** @test */
    public function admins_can_view_authors()
    {
        $admin = factory(Admin::class)->create();

        $response = $this->actingAs($admin, 'admin');

        $author = factory(Author::class)->create();

        $this->get('/authors')
        ->assertSee($author->name);
    }
}

