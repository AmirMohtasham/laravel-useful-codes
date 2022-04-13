<?php
namespace Tests\Feature\Models\ModelHelpersTesting;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;


trait BelongsToManyPostsTesting
{


    public function test_item_belongs_to_many_posts()
    {
        $count = rand(1,10);
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->has(Post::factory()->count($count),'posts')->create();
        $this->assertCount($count,$item->posts);
        $this->assertTrue($item->posts instanceof \Illuminate\Database\Eloquent\Collection);
        $this->assertTrue($item->posts->first() instanceof Post);

    }


    

    abstract public function getModel();

}
