<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait ForceDeleteTesting
{
    public function test_item_force_delete()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->forceDelete();
        $this->assertDatabaseMissing($table_name,['id'=>$item->id]);
    }

   
    abstract public function getModel();

}
