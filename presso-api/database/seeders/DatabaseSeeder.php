<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capsule;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $capsules = [
            ['name' => 'Vienna Lungo', 'type' => 'Original', 'image' => 'vienna-lungo.jpg', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody'],
            ['name' => 'Stockholm Lungo', 'type' => 'Original', 'image' => 'stockholm-lungo.jpg', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth'],
            ['name' => 'Cape Town Lungo', 'type' => 'Original', 'image' => 'cape-town-lungo.jpg', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense'],
            ['name' => 'Shanghai Lungo', 'type' => 'Original', 'image' => 'shanghai-lungo.jpg', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate'],
            ['name' => 'Tokyo Lungo', 'type' => 'Original', 'image' => 'tokyo-lungo.jpg', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate'],
            ['name' => 'Paris Espresso', 'type' => 'Original', 'image' => 'paris-espresso.jpg', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth'],

            ['name' => 'Vienna Lungo', 'type' => 'Vertuo', 'image' => 'vienna-lungo.jpg', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody'],
            ['name' => 'Stockholm Lungo', 'type' => 'Vertuo', 'image' => 'stockholm-lungo.jpg', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth'],
            ['name' => 'Cape Town Lungo', 'type' => 'Vertuo', 'image' => 'cape-town-lungo.jpg', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense'],
            ['name' => 'Shanghai Lungo', 'type' => 'Vertuo', 'image' => 'shanghai-lungo.jpg', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate'],
            ['name' => 'Tokyo Lungo', 'type' => 'Vertuo', 'image' => 'tokyo-lungo.jpg', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate'],
            ['name' => 'Paris Espresso', 'type' => 'Vertuo', 'image' => 'paris-espresso.jpg', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth'],
        ];

        foreach ($capsules as $capsule) {
            Capsule::create($capsule);
        }
    }
}