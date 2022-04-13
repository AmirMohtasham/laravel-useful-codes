<?php
namespace Tests\Feature\Models\ModelHelpersTesting;


trait SoftDeleteTesting
{


    public function test_soft_delete_item()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->delete();
        $this->assertSoftDeleted($item);
        $this->assertTrue(isset($item->deleted_at));
        $this->assertDatabaseHas($table_name,['deleted_at'=>$item->deleted_at,'id'=>$item->id]);
    }

    public function test_item_restore()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $item = $model::factory()->create();
        $item->delete();
        $item->restore();
        $this->assertDatabaseHas($table_name,['deleted_at'=>null,'id'=>$item->id]);
    }
    

    abstract public function getModel();

}
