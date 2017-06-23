<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function test_a_user_can_browse_threads()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads');

        $response->assertStatus(200);
        $response->assertSee($thread->title);
    }

    public function test_a_user_can_browse_a_single_thread()
    {
        $thread = factory('App\Thread')->create();

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);
    }

//    public function test_replys_showup_in_single_thread()
//    {
//        $thread = factory('App\Thread')->create();
//        $reply = factory('App\Reply')->create(['thread_id' => $thread.id]);
//
//        $response = $this->get('/threads' . $thread->id);
//
//        $response->assertSee($reply->body);
//    }
}
