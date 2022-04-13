<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait DisapproveTesting
{


    public function test_disapprove_item()
    {

        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->status = 'disapprove';
        $item->save();
        $this->assertDatabaseHas($table_name,['status'=>'disapprove','id'=>$item->id]);
    }


    

    abstract public function getModel();

}
