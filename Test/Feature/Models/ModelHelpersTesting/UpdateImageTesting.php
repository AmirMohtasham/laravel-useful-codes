<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait UpdateImageTesting
{

    public function test_update_image()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();

        $new_image = $this->faker->imageUrl();
        $item->image = $new_image;
        $item->save();
        $this->assertDatabaseHas($table_name,['image'=>$new_image ,'id'=>$item->id]);


    }

   
    abstract public function getModel();

}
