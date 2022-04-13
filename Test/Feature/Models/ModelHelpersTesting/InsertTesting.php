<?php
namespace Tests\Feature\Models\ModelHelpersTesting;

use App\Models\User;



trait InsertTesting
{

    public function test_insert_new_item()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $data = $model::factory()->make()->toArray();
        if($model instanceof User){
            $data['password'] = '12345';
            $data['email_verified_at'] = null;
        }
        $item = $model::create($data);
        

        $this->assertDatabaseHas($table_name,$data);
        $this->assertDatabaseCount($table_name,1);
        $this->assertTrue(isset($item->id));
        $this->assertTrue($item instanceof $model);
    }

    abstract public function getModel();

}
