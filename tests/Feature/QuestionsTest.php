<?php

namespace Tests\Feature;

use Tests\TestCase;
use app\Http\Controllers\QuestionsController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testApplication()
    {
        $this->withSession(['foo@foo.com' => 'barbar'])
            ->visit('/home');
    }

    /*
     * test the method category
     */


}
