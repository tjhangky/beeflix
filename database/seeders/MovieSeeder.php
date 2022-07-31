<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // Drama
         Movie::create([
            'genre_id' => 1,
            'title' => 'Start-Up',
            'photo' => 'start-up.jpg',
            'description' => 'Needing to make $90k to open her own business, Seo Dal Mi drops out of a university and takes up part-time work. She dreams of becoming someone like Steve Jobs. Nam Do San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do San becomes Seo Dal Mi’s first love. They cheer each others start and growth.',
            'rating' => 5,
        ]);
        Movie::create([
            'genre_id' => 1,
            'title' => 'Prison Playbook',
            'photo' => 'prison-playbook.jpg',
            'description' => 'A Korean baseball player is about to sign with a major league team in the US. However, his plans change after he chases a man who harasses his sister and finds himself spending a year in prison',
            'rating' => 3,
        ]);
        Movie::create([
            'genre_id' => 1,
            'title' => 'Squid Game',
            'photo' => 'squid-game.jpg',
            'description' => 'Hundreds of cash-strapped players accept a strange invitation to compete in children’s games. Inside, a tempting prize awaits — with deadly high stakes.',
            'rating' => 4,
        ]);
        Movie::create([
            'genre_id' => 1,
            'title' => 'It\'s Okay to Not Be Okay',
            'photo' => 'its-okay.jpg',
            'description' => 'A road to emotional healing opens up for an antisocial children\'s book author and an employee in a psychiatric hospital.',
            'rating' => 5,
        ]);
        
        // Kids
        Movie::create([
            'genre_id' => 2,
            'title' => 'SpongeBob SquarePants',
            'photo' => 'spongebob.jpg',
            'description' => 'The series chronicles the exploits and adventures of the title character and his various friends in the fictional underwater city of Bikini Bottom. The series follows the adventures of the dynamic sponge, Patrick, as he navigates the many dangers of the sea, the town, and the rest of the world.',
            'rating' => 5,
        ]);
        Movie::create([
            'genre_id' => 2,
            'title' => 'Shaun the Sheep',
            'photo' => 'shaun-the-sheep.jpg',
            'description' => 'Shaun is a young and clever sheep who leads his flock at a small farm in the countryside. He constantly gets into misadventures with his friends and locks horns with Bitzer, a sheepdog.',
            'rating' => 4,
        ]);
        Movie::create([
            'genre_id' => 2,
            'title' => 'Tayo the Little Bus',
            'photo' => 'tayo-the-little-bus.jpg',
            'description' => 'The adventures of Tayo, a blue bus with the number 120. He is very playful and mischievous with his passengers and his friends.',
            'rating' => 3,
        ]);
        Movie::create([
            'genre_id' => 2,
            'title' => 'ChalkZone',
            'photo' => 'chalk-zone.jpg',
            'description' => 'Young Rudy appears like any other student at his elementary school, but he has a special gift. Rudy can draw portals with his magic chalk and use those portals to enter new worlds. The drawings that have been previously erased come to life as Rudy explores the ChalkZone.',
            'rating' => 4,
        ]);


        // TV Show
        Movie::create([
            'genre_id' => 3,
            'title' => 'Loki',
            'photo' => 'loki.jpg',
            'description' => 'After stealing the Tesseract during the events of “Avengers: Endgame,” an alternate version of Loki is brought to the mysterious Time Variance Authority, a bureaucratic organization that exists outside of time and space and monitors the timeline. They give Loki a choice: face being erased from existence due to being a “time variant”or help fix the timeline and stop a greater threat.',
            'rating' => 5,
        ]);
        Movie::create([
            'genre_id' => 3,
            'title' => 'Moon Knight',
            'photo' => 'moon-knight.jpg',
            'description' => 'When Steven Grant, a mild-mannered gift-shop employee, becomes plagued with blackouts and memories of another life, he discovers he has dissociative identity disorder and shares a body with mercenary Marc Spector. As Steven/Marc’s enemies converge upon them, they must navigate their complex identities while thrust into a deadly mystery among the powerful gods of Egypt.',
            'rating' => 5,
        ]);
        Movie::create([
            'genre_id' => 3,
            'title' => 'What If…?',
            'photo' => 'what-if.jpg',
            'description' => 'Reimagining noteworthy events in the Marvel Cinematic Universe and creating a multiverse of infinite possibilities.',
            'rating' => 5,
        ]);
        Movie::create([
            'genre_id' => 3,
            'title' => 'Hawkeye',
            'photo' => 'hawkeye.jpg',
            'description' => 'Former Avenger Clint Barton has a seemingly simple mission: get back to his family for Christmas. Possible? Maybe with the help of Kate Bishop, a 22-year-old archer with dreams of becoming a superhero. The two are forced to work together when a presence from Barton’s past threatens to derail far more than the festive spirit.',
            'rating' => 5,
        ]);
    }
}
