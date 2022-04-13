<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait ApproveTesting
{


    public function test_approve_item()
    {

        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->status = 'approve';
        $item->save();
        $this->assertDatabaseHas($table_name,['status'=>'approve','id'=>$item->id]);
    }


    

    abstract public function getModel();

}
