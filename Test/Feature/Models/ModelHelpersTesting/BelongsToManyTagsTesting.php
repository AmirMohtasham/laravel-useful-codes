<?php
namespace Tests\Feature\Models\ModelHelpersTesting;

use App\Models\Tag;
use App\Models\User;


trait BelongsToManyTagsTesting
{


    public function test_item_belongs_to_many_tags()
    {
        $count = rand(1,10);
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->has(Tag::factory()->count($count),'tags')->create();
        $this->assertCount($count,$item->tags);
        $this->assertTrue($item->tags->first() instanceof Tag);
        $this->assertTrue($item->tags instanceof \Illuminate\Database\Eloquent\Collection);

    }


    

    abstract public function getModel();

}
