<?php

namespace Tests\Feature;

use User;
use Faker\Factory;
use Tests\TestCase;
use App\Models\Article;
use App\Models\Feedback;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LikingTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function an_article_can_be_liked()
    {
        $this->actingAs(UserFactory::new()->create());
        $article = Article::factory()->create();

        $article->like();

        $this->assertCount(1, $article->likes);
        $this->assertTrue($article->likes->contains('id',auth()->id()));
    }

    /** @test **/
    public function a_feedback_can_be_liked()
    {
        $this->actingAs(UserFactory::new()->create());
        $feedback = Feedback::factory()->create();

        $feedback->like();

        $this->assertCount(1, $feedback->likes);
    }
}
