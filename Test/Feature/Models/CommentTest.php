<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Models\ModelHelpersTesting\DeleteTesting;
use Tests\Feature\Models\ModelHelpersTesting\InsertTesting;
use Tests\Feature\Models\ModelHelpersTesting\ApproveTesting;
use Tests\Feature\Models\ModelHelpersTesting\PendingTesting;
use Tests\Feature\Models\ModelHelpersTesting\DisapproveTesting;
use Tests\Feature\Models\ModelHelpersTesting\BelongsToUserTesting;

class CommentTest extends TestCase
{
    use RefreshDatabase,
    WithFaker,
    InsertTesting,
    ApproveTesting,
    DisapproveTesting,
    PendingTesting,
    DeleteTesting,
    BelongsToUserTesting;

    public function getModel()
    {
        return new Comment;
    }

  


    public function test_comment_belongs_to_post()
    {
        $post = Post::factory()->create();
        $comment = Comment::factory()->for($post,'commentable')->create();
        $this->assertTrue($comment->commentable instanceof Post);
        $this->assertEquals($post->id,$comment->commentable->id);
    }

    
}
