<?php
namespace Tests\Feature\Models\ModelHelpersTesting;

use App\Models\User;


trait BelongsToUserTesting
{


    public function test_item_belongs_to_user()
    {
        $model = $this->getModel();
        $table_name = $model->getTable();

        $user = User::factory()->create();
        $item = $model::factory()->for($user)->create();
        $this->assertTrue($item->user instanceof User);
        $this->assertEquals($user->id,$item->user->id);

    }


    

    abstract public function getModel();

}
