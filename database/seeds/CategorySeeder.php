<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

   {
       $items = [
           ['id' => 1, 'name' => 'Kitchen'],
           ['id' => 2, 'name' => 'Living room'],
           ['id' => 3, 'name' => 'Office'],
           ['id' => 4, 'name' => 'Gadgets'],
           ['id' => 5, 'name' => 'Accessories'],
           ['id' => 6, 'name' => 'Tool kits'],
       ];

       foreach ($items as $item) {
           \App\Models\Category::create($item);
       }
   }
}
