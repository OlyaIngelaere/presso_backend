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
            ['name' => 'Vienna Lungo', 'type' => 'Original', 'image' => 'vienna-lungo.png', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody'],
            ['name' => 'Stockholm Lungo', 'type' => 'Original', 'image' => 'stockholm-lungo.png', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth'],
            ['name' => 'Cape Town Lungo', 'type' => 'Original', 'image' => 'capetown-lungo.png', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense'],
            ['name' => 'Shanghai Lungo', 'type' => 'Original', 'image' => 'shanghai-lungo.png', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate'],
            ['name' => 'Tokyo Lungo', 'type' => 'Original', 'image' => 'tokyo-lungo.png', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate'],
            ['name' => 'Paris Espresso', 'type' => 'Original', 'image' => 'paris-espresso.png', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth'],

            ['name' => 'Vienna Lungo', 'type' => 'Vertuo', 'image' => 'vienna-lungo.png', 'description' => 'Inspired by Vienna’s coffee tradition.', 'flavour_profile' => 'Spicy & Woody'],
            ['name' => 'Stockholm Lungo', 'type' => 'Vertuo', 'image' => 'stockholm-lungo.png', 'description' => 'Swedish balance & elegance.', 'flavour_profile' => 'Balanced & Smooth'],
            ['name' => 'Cape Town Lungo', 'type' => 'Vertuo', 'image' => 'capetown-lungo.png', 'description' => 'Full-bodied African roast.', 'flavour_profile' => 'Bold & Intense'],
            ['name' => 'Shanghai Lungo', 'type' => 'Vertuo', 'image' => 'shanghai-lungo.png', 'description' => 'Chinese refined roast.', 'flavour_profile' => 'Smooth & Delicate'],
            ['name' => 'Tokyo Lungo', 'type' => 'Vertuo', 'image' => 'tokyo-lungo.png', 'description' => 'Elegant Japanese roast.', 'flavour_profile' => 'Floral & Delicate'],
            ['name' => 'Paris Espresso', 'type' => 'Vertuo', 'image' => 'paris-espresso.png', 'description' => 'French inspired roast.', 'flavour_profile' => 'Rich & Smooth'],
        ];

        foreach ($capsules as $capsule) {
            Capsule::create($capsule);
        }

        $this->call([
            QuizSeeder::class,
        ]);
    }
}
