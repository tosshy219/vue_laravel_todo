<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            Todo::create([
                'text'=>'text'.$i
            ]);
        }
    }
}
