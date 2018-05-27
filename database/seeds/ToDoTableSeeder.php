<?php

use Illuminate\Database\Seeder;

class ToDoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Todo::class, 20)->create()->each(function($todo){
            //$todo->save();
        //});
        //$this->call(PostTableSeeder::class);
        factory(App\Models\Todo::class, 20)->create();
    }
}
