<?php

namespace Tests\Feature\Models;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Models\ModelHelpersTesting\InsertTesting;
use Tests\Feature\Models\ModelHelpersTesting\ApproveTesting;
use Tests\Feature\Models\ModelHelpersTesting\PendingTesting;
use Tests\Feature\Models\ModelHelpersTesting\DisapproveTesting;
use Tests\Feature\Models\ModelHelpersTesting\SoftDeleteTesting;
use Tests\Feature\Models\ModelHelpersTesting\UpdateSlugTesting;
use Tests\Feature\Models\ModelHelpersTesting\ForceDeleteTesting;
use Tests\Feature\Models\ModelHelpersTesting\UpdateImageTesting;
use Tests\Feature\Models\ModelHelpersTesting\UpdateTitleTesting;
use Tests\Feature\Models\ModelHelpersTesting\BelongsToUserTesting;
use Tests\Feature\Models\ModelHelpersTesting\UpdateContentTesting;
use Tests\Feature\Models\ModelHelpersTesting\HasManyCommentsTesting;
use Tests\Feature\Models\ModelHelpersTesting\BelongsToManyTagsTesting;

class PostTest extends TestCase
{
    use RefreshDatabase,
    WithFaker,
    InsertTesting,
    SoftDeleteTesting,
    ForceDeleteTesting,
    UpdateTitleTesting,
    UpdateSlugTesting,
    UpdateContentTesting,
    UpdateImageTesting,
    ApproveTesting,
    DisapproveTesting,
    PendingTesting,
    BelongsToUserTesting,
    BelongsToManyTagsTesting,
    HasManyCommentsTesting;

    public function getModel()
    {
        return new Post;
    }

}
