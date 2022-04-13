<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait PendingTesting
{


    public function test_pending_item()
    {

        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->state(['status'=>'approve'])->create();
        $item->status = 'pending';
        $item->save();
        $this->assertDatabaseHas($table_name,['status'=>'pending','id'=>$item->id]);
    }


    

    abstract public function getModel();

}
