<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // Create the parent category
        $parentCategory = Category::create([
            'name' => 'clothes',
            'parent_id' => null,
        ]);

        // Use the parent category's ID to create child categories
        Category::insert([
            [
                'name' => 'coat',
                'parent_id' => $parentCategory->id,
            ],
            [
                'name' => 'jacket',
                'parent_id' => $parentCategory->id,
            ]
        ]);


        $parentCategory = Category::create([
            'name' => 'cars',
            'parent_id' => null,
        ]);

        // Use the parent category's ID to create child categories
        Category::insert([
            [
                'name' => 'BMW',
                'parent_id' => $parentCategory->id,
            ]
        ]);

    }
}
