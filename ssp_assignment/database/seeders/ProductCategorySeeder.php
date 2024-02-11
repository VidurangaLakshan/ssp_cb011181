<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $vegetableCategories = array(
        //     "Leafy Greens" => array("Spinach", "Kale", "Lettuce", "Swiss chard", "Collard greens"),
        //     "Cruciferous Vegetables" => array("Broccoli", "Cauliflower", "Brussels sprouts", "Cabbage"),
        //     "Root Vegetables" => array("Carrots", "Potatoes", "Sweet potatoes", "Beets", "Radishes"),
        //     "Allium Vegetables" => array("Onions", "Garlic", "Leeks", "Shallots", "Chives"),
        //     "Gourd and Squash Vegetables" => array("Zucchini", "Butternut squash", "Acorn squash", "Pumpkin", "Cucumber"),
        //     "Nightshade Vegetables" => array("Tomatoes", "Bell peppers", "Eggplant"),
        //     "Podded Vegetables" => array("Peas", "Green beans", "Snap peas", "Edamame"),
        //     "Stalk and Stem Vegetables" => array("Asparagus", "Celery", "Rhubarb", "Bamboo shoots"),
        //     "Tubers" => array("Cassava", "Yams"),
        //     "Miscellaneous Vegetables" => array("Artichokes", "Avocado", "Mushrooms", "Okra"),
        // );

        $vehicleCategories = array(
            "Doors" => array("Hood", "Trunk", "Front Left Door", "Front Right Door", "Rear Left Door", "Rear Right Door"),
            "Windows" => array("Front Windshield", "Rear Windshield", "Front Side Windows", "Rear Side Windows"),
            "Wheels and Tires" => array("Alloy Wheels", "Steel Wheels", "Summer Tires", "Winter Tires", "All-Season Tires"),
            "Engine Parts" => array("Engine Block", "Pistons", "Cylinder Head", "Crankshaft", "Camshaft", "Oil Pump"),
            "Exhaust System" => array("Muffler", "Catalytic Converter", "Exhaust Manifold", "Exhaust Pipes"),
            "Lights and Lamps" => array("Headlights", "Taillights", "Turn Signal Lights", "Fog Lights", "Brake Lights"),
            "Interior Components" => array("Seats", "Dashboard", "Steering Wheel", "Center Console", "Floor Mats"),
            "Electrical Components" => array("Battery", "Alternator", "Starter Motor", "Ignition Coil", "Spark Plugs"),
            "Suspension and Steering" => array("Shock Absorbers", "Struts", "Control Arms", "Tie Rods", "Steering Rack"),
            "Braking System" => array("Brake Pads", "Brake Rotors", "Brake Calipers", "Brake Lines")
        );
        

        foreach ($vehicleCategories as $categoryName => $parts) {
            $category = \App\Models\ProductCategory::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($parts as $partName) {
                \App\Models\ProductCategory::create([
                    'name' => $partName,
                    'slug' => \Illuminate\Support\Str::slug($partName),
                    'parent_id' => $category->id,
                ]);
            }
        }
    }
}
