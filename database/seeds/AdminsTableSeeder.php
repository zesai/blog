<?php

use App\Models\Admin\Admins;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admins::class)->times(10)->create();

        //第一条单独处理
        $admin = Admins::find(1);
        $admin->username = 'admin';
        $admin->name = 'Summer';
        $admin->password = bcrypt('123456');
        $admin->avatar = '/uploads/image/avatar/05.png';
        $admin->save();

    }
}
