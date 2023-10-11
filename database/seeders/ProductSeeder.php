<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $json = File::get("database/data/products.json");
        $features = json_decode($json);

        foreach ($features as $key => $value) {
            Product::create([
                "name" => $value->name,
                "description" => $value->description,
                "category_id" => $value->category_id,
                "featured" => $value->featured,
                "mainPhoto" => $value->mainPhoto
            ]);
        }
    }
}
