<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\ProductFeature;

class ProductCharsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/product-chars.json");
        $features = json_decode($json);

        foreach ($features as $key => $value) {
            ProductFeature::create([
                "product_id" => $value->product_id,
                "feature" => $value->feature,
            ]);
        }
    }
}
