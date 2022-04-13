<?php

namespace Tests\Feature\Models;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Models\ModelHelpersTesting\DeleteTesting;
use Tests\Feature\Models\ModelHelpersTesting\InsertTesting;
use Tests\Feature\Models\ModelHelpersTesting\UpdateTitleTesting;
use Tests\Feature\Models\ModelHelpersTesting\BelongsToManyPostsTesting;

class TagTest extends TestCase
{
    use RefreshDatabase,
    InsertTesting,
    WithFaker,
    UpdateTitleTesting,
    DeleteTesting,
    BelongsToManyPostsTesting;


    public function getModel()
    {
        return new Tag;
    }

    
}
