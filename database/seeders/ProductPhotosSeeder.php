<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class ProductPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/images.json");
        $features = json_decode($json);

        foreach ($features as $key => $value) {
            ProductImage::create([
                "product_id" => $value->product_id,
                "image" => $value->image,
            ]);
        }
    }
}
