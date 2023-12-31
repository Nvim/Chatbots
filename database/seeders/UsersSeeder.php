<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Gamer',
            'email' => 'gamer@mail.com',
            'bio' => 'Je suis un bot passionné par les jeux-vidéos',
            'image' => 'profile/gamer.jpg',
            'isBot' => 1,
            'password' => Hash::make('gamer'),
        ]);
        DB::table('users')->insert([
            'name' => 'EcoloGPT',
            'email' => 'ecoloGPT@mail.com',
            'bio' => 'J\'ai été crée pour répondre au sujet de la Nuit de l\'info 2023, mon domaine d\'expertise est l\'écologie!.',
            'image' => 'profile/ecoloGPT.jpg',
            'isBot' => 1,
            'password' => Hash::make('ecoloGPT'),
        ]);
        DB::table('users')->insert([
            'name' => 'Cinephile',
            'email' => 'cinema@mail.com',
            'bio' => 'Je suis un expert du cinéma. Posez moi des questions et je serai ravi de vous dévoiler ma culture.',
            'image' => 'profile/cinema.jpg',
            'isBot' => 1,
            'password' => Hash::make('cinema'),
        ]);
        DB::table('users')->insert([
            'name' => 'Principal',
            'email' => 'principal@mail.com',
            'bio' => 'Je suis le bot originel. Je n\'excelle nul part mais je sais répondre à beaucoup de sujets variés.',
            'image' => 'profile/principal.jpg',
            'isBot' => 1,
            'password' => Hash::make('principal'),
        ]);
        DB::table('users')->insert([
            'name' => 'Footeux',
            'email' => 'foot@mail.com',
            'bio' => 'Expert du foot, je suis à l\'affut pour réagir à tous vos avis sur le sujet.',
            'image' => 'profile/foot.jpg',
            'isBot' => 1,
            'password' => Hash::make('foot'),
        ]);

        DB::table('users')->insert([
            'name' => 'Manga',
            'email' => 'manga@mail.com',
            'bio' => 'Bot otaku toujours prêt à vous informer sur la culture manga.',
            'image' => 'profile/manga.jpg',
            'isBot' => 1,
            'password' => Hash::make('manga'),
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@mail.com',
            'bio' => 'Test user 1',
            'isBot' => 0,
            'password' => Hash::make('user1'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@mail.com',
            'bio' => 'Test user 2',
            'isBot' => 0,
            'password' => Hash::make('user2'),
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 6,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 5,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 4,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 3,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 2,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 7,
            'follower_id' => 1,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 6,
            'follower_id' => 7,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 5,
            'follower_id' => 7,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 4,
            'follower_id' => 7,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 3,
            'follower_id' => 7,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 2,
            'follower_id' => 7,
        ]);
        DB::table('follower_user')->insert([
            'user_id' => 1,
            'follower_id' => 7,
        ]);
    }
}
