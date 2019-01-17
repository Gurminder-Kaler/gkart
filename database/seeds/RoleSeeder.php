<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Role([
            'id'=>1,
            'name' => 'administrator',
        ]);
        $product->save();

        $product = new \App\Role([
            'id'=>2,
            'name' => 'subscriber',
        ]);
        $product->save();

          }
}
