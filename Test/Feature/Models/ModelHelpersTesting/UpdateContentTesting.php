<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait UpdateContentTesting
{

    public function test_update_content()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();

        $new_content = $this->faker->text();
        $item->content = $new_content;
        $item->save();
        $this->assertDatabaseHas($table_name,['content'=>$new_content ,'id'=>$item->id]);


    }

   
    abstract public function getModel();

}
