<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ToDoList;

class ToDoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $toDoList = new ToDoList();
        $toDoList->titile = 'sample to do';
        $toDoList->content = 'Content of the sample to do list';
        $toDoList->save();

        $toDoList = new ToDoList();
        $toDoList->titile = 'Another to do';
        $toDoList->content = 'Another Content of the sample to do list';
        $toDoList->save();
    }
}
