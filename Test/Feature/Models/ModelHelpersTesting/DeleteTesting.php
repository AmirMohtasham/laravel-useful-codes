<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait DeleteTesting
{
    public function test_item_delete()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->delete();
        $this->assertDatabaseMissing($table_name,['id'=>$item->id]);
    }

   
    abstract public function getModel();

}
