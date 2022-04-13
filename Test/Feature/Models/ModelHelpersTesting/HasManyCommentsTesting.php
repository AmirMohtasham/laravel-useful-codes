<?php
namespace Tests\Feature\Models\ModelHelpersTesting;

use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;


trait HasManyCommentsTesting
{


    public function test_item_has_many_comments()
    {
        $count = rand(1,10);
        $model = $this->getModel();
        $table_name = $model->getTable();


        $count = rand(1,10);
        $item = $model::factory()->has(Comment::factory()->count($count),'comments')->create();
        $this->assertCount($count,$item->comments);
        $this->assertTrue($item->comments->first() instanceof Comment);
        $this->assertTrue($item->comments instanceof \Illuminate\Database\Eloquent\Collection);


    }


    

    abstract public function getModel();

}
