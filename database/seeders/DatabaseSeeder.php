<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Property;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Création des libellés de types et catégories de propriété.
        $type_category = collect([
            ['title' => 'Maison individuelle', 'description' => 'Une maison est un bâtiment d\'habitation, souvent de taille moyenne destiné au logement d\'une famille, ou encore plus imposante divisée en plusieurs résidences ou appartements. Une maison est, en droit civil français, un immeuble, mot qui désigne aussi couramment un édifice de plusieurs étages divisé en plusieurs appartements occupés par diverses familles. On parle alors d\'immeuble collectif. '],
            ['title' => 'Appartement', 'description' => 'Un appartement est une unité d’habitation, comportant un certain nombre de pièces et qui n’occupe qu’une partie d’un immeuble, situé généralement dans une ville. '],
            ['title' => 'Enclos à dinosaure', 'description' => 'Un enclos est un espace de terrain entouré d\'une clôture qui sert à contenir des dinosaure, à délimiter un monument commémoratif. ']
        ]);
        // Création des types aux quelles ont associent des biens avec des images
        $type_category->each(fn($item, $key) => Type::factory(['title' => $item['title'], 'description' => $item['description']])->has(Property::factory(13)->hasImages(rand(1, 10)))->create());
        // Création des catégories aux quelles ont associent des articles avec des tags
        $type_category->each(fn($item, $key) => Category::factory(['title' => $item['title'], 'description' => $item['description']])->has(Post::factory(13)->hasTags(rand(1, 10)))->create());

        //Création de l'administrateur
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$hSdC6HpcpbtsRY5sOqfvxeWQanLevwAwxiJJb2lFmKIv5Hi9VRwZe', // password - admin1234
            'remember_token' => Str::random(10),
        ]);
    }
}
