<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capsule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Olya Ingelaere',
            'email' => 'r0943033@student.thomasmore.be',
            'password' => Hash::make('PressoLogin123')
        ]);

        $capsules = [
            ['name' => 'Vienna Lungo', 'type' => 'Original', 'image' => 'vienna-lungo.jpg', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody', 'price' => 4.80],
            ['name' => 'Stockholm Lungo', 'type' => 'Original', 'image' => 'stockholm-lungo.jpg', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth', 'price' => 5.30],
            ['name' => 'Cape Town Lungo', 'type' => 'Original', 'image' => 'capetown-lungo.jpg', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense', 'price' => 4.80],
            ['name' => 'Shanghai Lungo', 'type' => 'Original', 'image' => 'shanghai-lungo.jpg', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate', 'price' => 5.30],
            ['name' => 'Tokyo Lungo', 'type' => 'Original', 'image' => 'tokyo-lungo.jpg', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate', 'price' => 5.30],
            ['name' => 'Paris Espresso', 'type' => 'Original', 'image' => 'paris-espresso.jpg', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth', 'price' => 5.80],

            ['name' => 'Vienna Lungo', 'type' => 'Vertuo', 'image' => 'vienna-lungo.jpg', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody', 'price' => 7.80],
            ['name' => 'Stockholm Lungo', 'type' => 'Vertuo', 'image' => 'stockholm-lungo.jpg', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth', 'price' => 5.60],
            ['name' => 'Cape Town Lungo', 'type' => 'Vertuo', 'image' => 'capetown-lungo.jpg', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense', 'price' => 6.80],
            ['name' => 'Shanghai Lungo', 'type' => 'Vertuo', 'image' => 'shanghai-lungo.jpg', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate', 'price' => 5.60],
            ['name' => 'Tokyo Lungo', 'type' => 'Vertuo', 'image' => 'tokyo-lungo.jpg', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate', 'price' => 7.80],
            ['name' => 'Paris Espresso', 'type' => 'Vertuo', 'image' => 'paris-espresso.jpg', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth', 'price' => 6.80],
        ];

        foreach ($capsules as $capsule) {
            Capsule::create($capsule);
        }

        $this->call([
            QuizSeeder::class,
        ]);
    }
}
