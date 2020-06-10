<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function table_is_set_up()
    {
        $this->assertTrue( 
            Schema::hasColumns('books', [
               'id','author_id','title','isbn','price'
               ]), 1);
    }
}
