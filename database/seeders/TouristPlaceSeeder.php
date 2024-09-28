<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TouristPlace;
use App\Models\Location;
use App\Models\Activity;
use App\Models\Accommodation;
use App\Models\Tip;
use App\Models\Transportation;
use App\Models\TimeToVisit;
use App\Models\PlacesGallery;
use Illuminate\Support\Facades\DB;

class TouristPlaceSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks to avoid constraint issues
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear the tables before seeding
        TouristPlace::truncate();
        Location::truncate();
        Activity::truncate();
        Accommodation::truncate();
        Tip::truncate();
        Transportation::truncate();
        TimeToVisit::truncate();
        PlacesGallery::truncate();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create 5 locations
        $locations = Location::factory()->count(5)->create();

        // Create 10 tourist places and associated data
        foreach (range(1, 20) as $index) {
            $location = $locations->random();

            // Create the TouristPlace
            $touristPlace = TouristPlace::create([
                'location_id' => $location->id,
                'title' => 'Tourist Place ' . $index,
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' . $index,
                'category' => 'Category1' ,
            ]);

            // Create related models for each TouristPlace
            TimeToVisit::create([
                'tourist_place_id' => $touristPlace->id,
                'time_to_visit' => 'Best time to visit place ' . $index,
            ]);

            Activity::create([
                'tourist_place_id' => $touristPlace->id,
                'activity' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ' . $index,
            ]);

            Accommodation::create([
                'tourist_place_id' => $touristPlace->id,
                'accommodation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ' . $index,
            ]);

            Tip::create([
                'tourist_place_id' => $touristPlace->id,
                'tip' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ' . $index,
            ]);

            Transportation::create([
                'tourist_place_id' => $touristPlace->id,
                'transportation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' . $index,
            ]);
            $imageUrls = [
                'places_galleries/2lu0s69qXXZ190uDD7HlhtC9Cg4wPTqRE2gKIwZ0.jpg',
                'places_galleries/hRAbvTKahkEIodMaYBLRKAV1uSV0hV0HjRfTkoS1.jpg',
                'places_galleries/KzyVgIWddIgeR3zltRFuvRZpH6jlBxyApU8lTqQu.jpg',
                'places_galleries/Pl2NTqTqdelAJO163DOfqNXUdpHzeiu0NbMnzfey.jpg',
                'places_galleries/TUKKXJrDPDigghnXoGUKhwqvdlaf1ZWCeIsRMdOc.jpg'
            ];

            // Create a gallery with 3 images for each TouristPlace
            foreach ($imageUrls as $url) {
                PlacesGallery::create([
                    'tourist_place_id' => $touristPlace->id,
                    'gallery' => $url,
                ]);
            }
        }
    }
}
