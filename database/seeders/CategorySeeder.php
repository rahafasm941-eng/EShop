<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Devices and gadgets including phones, laptops, and accessories.'
            ],
            [
                'name' => 'Books',
                'description' => 'A variety of books from fiction to non-fiction and educational materials.'
            ],
            [
                'name' => 'Clothing',
                'description' => 'App' ]
            ];
    } 
}
