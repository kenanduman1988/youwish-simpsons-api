<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            'Abbey' => 'Abbey is a limited-time premium character that was released on December 18, 2019, as part of Act 2 of the Abe\'s in Toyland 2019 Event. She is unlocked upon the completion of the Old Theatre District.',
            'Baby Barney' => 'Baby Barney is a limited-time premium character that was released on August 7, 2019, as part of a Gil Deal during the Simpsons Babies 2019 Event. He is unlocked upon the placement of Moe\'s Express Lemonade.',
            'Canadian Flanders' => 'Canadian Flanders is a limited-time character that was released on July 17, 2019, as part of Flanders Family Reunion 2019 Event. He was the first prize to be won in the event.',
        ];

        foreach($list as $name => $quote) {
            Character::create([
                'name' => $name,
                'quote' => $quote,
            ]);
        }
    }
}
