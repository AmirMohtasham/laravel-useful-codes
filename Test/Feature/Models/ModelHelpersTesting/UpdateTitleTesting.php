<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait UpdateTitleTesting
{

    public function test_update_title()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();

        $new_title = $this->faker->text(20);
        $item->title = $new_title;
        $item->save();
        $this->assertDatabaseHas($table_name,['title'=>$new_title ,'id'=>$item->id]);


    }

   
    abstract public function getModel();

}
