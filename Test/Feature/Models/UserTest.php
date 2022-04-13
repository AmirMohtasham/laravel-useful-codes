<?php

namespace Tests\Feature\Models;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Feature\Models\ModelHelpersTesting\InsertTesting;
use Tests\Feature\Models\ModelHelpersTesting\HasManyPostsTesting;

class UserTest extends TestCase
{
    use RefreshDatabase,
    WithFaker,
    InsertTesting,
    HasManyPostsTesting;

    public function getModel()
    {
        return new User;
    }


    
}
