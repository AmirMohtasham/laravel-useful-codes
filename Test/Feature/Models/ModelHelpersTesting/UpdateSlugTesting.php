<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait UpdateSlugTesting
{

    public function test_update_slug()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();

        $new_slug = $this->faker->slug();
        $item->slug = $new_slug;
        $item->save();
        $this->assertDatabaseHas($table_name,['slug'=>$new_slug ,'id'=>$item->id]);


    }

   
    abstract public function getModel();

}
