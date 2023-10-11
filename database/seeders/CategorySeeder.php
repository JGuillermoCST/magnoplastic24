<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {

        $json = File::get("database/data/categories.json");
        $features = json_decode($json);

        foreach ($features as $key => $value) {
            Category::create([
                "name" => $value->name,
                "description" => $value->description
            ]);
        }
    }
}
