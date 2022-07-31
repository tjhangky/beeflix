<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Drama 1
        $drama_1 = ['Start-Up', 'Family, Friends, Fools', 'Angel', 'Sandbox', 'Hackathon', 'Key Man', 'Burn Rate', 'Backup', 'Risk', 'Demo Day', 'Exit', 'Acqhire', 'Comfort Zone', 'Elevator Speech', 'MVP (Minimum Viable Product)', 'Scale Up'];
        foreach ($drama_1 as $key => $value) {
            Episode::create([
                'movie_id' => 1,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Drama 2
        $drama_2 = ['The Sentence', 'The Second Trial', 'Seobu Penitentiary', 'Retirement', 'I’m Going to Quit Baseball', 'The Ramyeon Box', 'Starting Baseball Again', 'Bak Sa\'s Abdominal Pain', 'New Troublesome Inmates', 'The 140km Pitch', 'The New Prisoner', 'Fire Drill'];
        foreach ($drama_2 as $key => $value) {
            Episode::create([
                'movie_id' => 2,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Drama_3
        $drama_3 = ['Red Light, Green Light', 'Hell', 'The Man with the Umbrella', 'Stick to the Team', 'A Fair World', 'Gganbu', 'VIPS', 'Front Man', 'One Lucky Day'];
        foreach ($drama_3 as $key => $value) {
            Episode::create([
                'movie_id' => 3,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Drama 4
        $drama_4 = ['The Boy Who Fed on Nightmares', 'The Lady in Red Shoes', 'Sleeping Witch', 'Zombie Kid', 'Rapunzel and the Cursed Castle', 'Bluebeard\'s Secret', 'The Cheerful Dog', 'Beauty and the Beast', 'King Donkey Ears', 'The Girl Who Cried Wolf', 'The Ugly Duckling', 'Romeo and Juliet'];
        foreach ($drama_4 as $key => $value) {
            Episode::create([
                'movie_id' => 4,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Kids 5
        $kids_5 = ['Lockdown for Love', 'Under the Small Top', 'Squidwards Sick Daze', 'Goofy Scoopers', 'Pat the Dog', 'Something Narwhal This Way Comes', 'C.H.U.M.S', 'SpongeBobs Road to Christmas', 'Potato Puff'];
        foreach ($kids_5 as $key => $value) {
            Episode::create([
                'movie_id' => 5,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Kids 6
        $kids_6 = ['Out Of Order', 'Karma Farmer', 'Turf Wars', 'A Prickly Problem', 'The Farmers Nephew', 'Rude Dude', 'Spoilsport', 'Baa-d Hair Day', 'Timmy And The Dragon', 'Keeping the Peace', 'Happy Farmers Day'];
        foreach ($kids_6 as $key => $value) {
            Episode::create([
                'movie_id' => 6,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Kids 7
        $kids_6 = ['A Day in the Life of Tayo', 'Tayo gets lost', 'Tayos First Drive', 'Good Friends', 'Afraid of the Dark', 'Thanks, Cito!', 'Lets All Get Along', 'I Want New Tires', 'Our New Friend, Gani'];
        foreach ($kids_6 as $key => $value) {
            Episode::create([
                'movie_id' => 7,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // Kids 8
        $kids_8 = ['French Fry Falls/Amazin River/Gift A Drift/Escucha Mi Corazon', 'Skrawl/Pieday/Secret Passages/In The Zone', 'Snap Out Of Water/Two Left Feet/Rudus Tabootus/All Day Jam', 'The Wiggies/Rapunzel/Hair To Stay/Coming To Life', 'Pop Goes the Balloon; Madcap Snap; Fireplug Ballet'];
        foreach ($kids_8 as $key => $value) {
            Episode::create([
                'movie_id' => 8,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // TV Show 9
        $tv_show_9 = ['Glorious Purpose', 'The Variant', 'Lamentis', 'The Nexus Event', 'Journey Into Mystery', 'For All Time. Always.'];
        foreach ($tv_show_9 as $key => $value) {
            Episode::create([
                'movie_id' => 9,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // TV Show 10
        $tv_show_10 = ['The Goldfish Problem', 'Summon the Suit', 'The Friendly Type', 'The Tomb', 'Asylum', 'Gods and Monsters'];
        foreach ($tv_show_10 as $key => $value) {
            Episode::create([
                'movie_id' => 10,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // TV Show 11
        $tv_show_11 = ['What If… Captain Carter Were The First Avenger?', 'What If… T\'Challa Became a Star-Lord?', 'What If… The World Lost Its Mightiest Heroes?', 'What If… Doctor Strange Lost His Heart Instead of His Hands?', 'What If… Zombies!?', 'What If… Killmonger Rescued Tony Stark?', 'What If… Thor Were an Only Child?', 'What If… Ultron Won?', 'What If… The Watcher Broke His Oath?'];
        foreach ($tv_show_11 as $key => $value) {
            Episode::create([
                'movie_id' => 11,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }

        // TV Show 12
        $tv_show_12 = ['Never Meet Your Heroes', 'Hide and Seek', 'Echoes', 'Partners, Am I Right?', 'Ronin', 'So This Is Christmas?'];
        foreach ($tv_show_12 as $key => $value) {
            Episode::create([
                'movie_id' => 12,
                'episode' => $key + 1,
                'title' => $value,
            ]);
        }
    }
}
