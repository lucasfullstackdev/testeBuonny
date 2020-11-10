<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->collection as $item) {
            $this->model::create($item);
        }
    }
}
